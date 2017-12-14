<?php

require_once 'deletemailings.civix.php';

/**
 * Implements hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function deletemailings_civicrm_config(&$config) {
  _deletemailings_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function deletemailings_civicrm_xmlMenu(&$files) {
  _deletemailings_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function deletemailings_civicrm_install() {
  _deletemailings_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function deletemailings_civicrm_uninstall() {
  _deletemailings_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function deletemailings_civicrm_enable() {
  _deletemailings_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function deletemailings_civicrm_disable() {
  _deletemailings_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function deletemailings_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _deletemailings_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function deletemailings_civicrm_managed(&$entities) {
  _deletemailings_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function deletemailings_civicrm_caseTypes(&$caseTypes) {
  _deletemailings_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function deletemailings_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _deletemailings_civix_civicrm_alterSettingsFolders($metaDataFolders);
}
