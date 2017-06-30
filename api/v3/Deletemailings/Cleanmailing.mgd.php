<?php
// This file declares a managed database record of type "Job".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'Delete Unscheduled Mailings',
    'entity' => 'Job',
    'params' => 
    array (
      'version' => 3,
      'name' => 'Delete Unscheduled Mailings',
      'description' => 'This job deletes draft and unscheduled mailings over 30 days old',
      'run_frequency' => 'Daily',
      'api_entity' => 'Deletemailings',
      'api_action' => 'cleanmailing',
      'parameters' => 'days=30',
    ),
  ),
);