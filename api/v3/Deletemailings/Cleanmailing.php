<?php

/**
 * Deletemailings.CleanMailing API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_deletemailings_cleanmailing($params) {
  $returnValues = [];
  $days = CRM_Utils_Array::value('days', $params);
  if (empty($days)) {
    $days = 30;
  }

  $result = civicrm_api3('Mailing', 'get', [
    'sequential' => 1,
    'scheduled_id' => ['IS NULL' => 1],
    'created_date' => ['<' => (new DateTime("-{$days} days"))->format('Y-m-d')],
    'options' => ['limit' => 0],
  ]);

  foreach ($result['values'] as $value) {
    civicrm_api3('Mailing', 'delete', [
        'id' => $value['id'],
    ]);
    $returnValues[] = $value['id'];
  }
  return civicrm_api3_create_success($returnValues, $params, 'DeleteMailings', 'Cleanmailing');
}
