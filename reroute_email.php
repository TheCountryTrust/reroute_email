<?php

require_once 'reroute_email.civix.php';
// phpcs:disable
use CRM_RerouteEmail_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_alterMailParams().
 *
 * Notes from Doc pages:
 * $params array fields include: workflow, from, toName, toEmail, 
 * subject, cc, bcc, text, html, returnPath, replyTo, headers (array), 
 * attachments (array), and possibly others depending on context.
 * 
 * $params array used to include valueName and groupName. These should not be referenced
 * as they will stop working in future upgrades The option groups they referred to are obsolete
 * & will also be phased out. workflow should be checked instead.
 * 
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterMailParams/
 */
function reroute_email_civicrm_alterMailParams(&$params, $context)
{
  // Set the destination email address we want email routed to  
  $params['toEmail'] = 'youremail@yourdomain.com'; // Set the destination email address

  //If you need to for testing, set the name of the email recipient - not really needed
  //$params['toName'] = 'YourName';

}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function reroute_email_civicrm_config(&$config) {
  _reroute_email_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function reroute_email_civicrm_xmlMenu(&$files) {
  _reroute_email_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function reroute_email_civicrm_install() {
  _reroute_email_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function reroute_email_civicrm_postInstall() {
  _reroute_email_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function reroute_email_civicrm_uninstall() {
  _reroute_email_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function reroute_email_civicrm_enable() {
  _reroute_email_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function reroute_email_civicrm_disable() {
  _reroute_email_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function reroute_email_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _reroute_email_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function reroute_email_civicrm_managed(&$entities) {
  _reroute_email_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Add CiviCase types provided by this extension.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function reroute_email_civicrm_caseTypes(&$caseTypes) {
  _reroute_email_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Add Angular modules provided by this extension.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function reroute_email_civicrm_angularModules(&$angularModules) {
  // Auto-add module files from ./ang/*.ang.php
  _reroute_email_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function reroute_email_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _reroute_email_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function reroute_email_civicrm_entityTypes(&$entityTypes) {
  _reroute_email_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function reroute_email_civicrm_themes(&$themes) {
  _reroute_email_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function reroute_email_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function reroute_email_civicrm_navigationMenu(&$menu) {
//  _reroute_email_civix_insert_navigation_menu($menu, 'Mailings', [
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ]);
//  _reroute_email_civix_navigationMenu($menu);
//}
