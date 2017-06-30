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
  $days = CRM_Utils_Array::value('days', $params);
  if (empty($days)) {
    $days = 30;
  }

  $result = civicrm_api3('Mailing', 'get', array(
    'sequential' => 1,
    'scheduled_id' => array('IS NULL' => 1),
    'options' => array('limit' => 0),
  ));

  if ($result['count'] > 0) {
    foreach ($result['values'] as $value) {
       if(strtotime($value['created_date']) < strtotime("-{$days} days")) {
         civicrm_api3('Mailing', 'delete', array(
           'id' => $value['id'],
         ));
         $returnValues[] = $value['id'];
       }
    }
  }
  return civicrm_api3_create_success($returnValues, $params, 'DeleteMailings', 'Cleanmailing');
}

