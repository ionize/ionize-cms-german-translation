<?php

/*
|--------------------------------------------------------------------------
| Connect library Language file
| Language : 	German
| Translater :	MaddinXx, 5th Oct 2011
|
| This lang file can be replaced by a theme one.
| Simply copy this file in the folder /themes/your_theme/language/xx/
| and modify the translations elements.
|
|--------------------------------------------------------------------------
*/

// Main library language elements
$lang['connect_login_failed'] = 'Ihre Logindaten konnten nicht gefunden werden. Entweder verwenden Sie einen falschen Benutzernamen oder ein falsches Passwort. Bitte versuchen Sie es erneut.';
$lang['connect_access_denied'] = 'Sie haben keinen Zugriff auf %s';
$lang['connect_missing_parameters']	= 'Der %s Parameter hat gefehlt';
$lang['connect_parameter_error'] = 'Der Parameter, welcher zu %s übermittelt wure ist falsch.';
$lang['connect_user_save_impossible'] = 'Wir konnten Ihre Daten nicht in unserem System speichern. Bitte versuchen Sie es erneut oder kontaktieren Sie uns.';
$lang['connect_user_already_exists'] = 'Es xistiert bereits ein Benutzer mit diesen Angaben. Bitte versuchen Sie einen anderen Benutzernamen oder eine andere E-Mail Adresse.';
$lang['connect_blocked'] = 'Auf Grund zu vieler Fehlversuche wurden Sie us dem System geblockt. Bitte versuchen Sie es noch einmal %s';
$lang['connect_cannot_ban_yourself'] = 'Sie können sich nicht seler bannen.';
$lang['connect_register_success'] = 'Sie haben sich erfolgreich registriert.';
$lang['connect_register_success_verify_user'] = 'Sie haben sich erfolgreich registriert, aber wir müssen zuerst Ihre Daten verifizieren. Eine E-Mail wurde an Sie geschickt, in welcher Sie den Aktivierungslink klicken müssen, um Ihren Account zu aktivieren.';

// Activation mail to Admin
$lang['connect_admin_mail_subject'] = 'Registrierung';
$lang['connect_admin_mail_title'] = 'Registrierung';
$lang['connect_admin_mail_intro'] = 'Ein Benutzer hat sich auf der Webseite registriert.';
$lang['connect_admin_mail_nom'] = 'Name';
$lang['connect_admin_mail_login'] = 'Login';
$lang['connect_admin_mail_email'] = 'E-Mail';
$lang['connect_admin_mail_activation_link'] = 'Aktivierungslink';

// Activation mail to User
$lang['connect_user_mail_subject'] = 'Ihre Registierung';
$lang['connect_user_mail_activated'] = 'Account aktiviert';
$lang['connect_act_user_mail_title'] = 'Willkommen !';
$lang['connect_act_user_mail_intro'] = 'Wir danken Ihnen für die Registierung auf unserer Webseite.';
$lang['connect_act_user_mail_text'] = 'Um Ihre Registierung abzuschliessen, klicken Sie auf den Aktivierungslink.';
$lang['connect_act_user_mail_activation_link'] = 'Aktivierungslink';

// Registration confirmation mail to User
$lang['connect_wait_user_mail_title'] = 'Willkommen !';
$lang['connect_wait_user_mail_intro'] = 'Wir danken Ihnen für die Registrierung auf unserer Webseite.';
$lang['connect_wait_user_mail_text'] = 'Ihr Account wird bald von einem Administrator freigeschaltet werden.';

// Registration views
$lang['connect_user_registration_title'] = 'Registrierung erfolgreich';
$lang['connect_user_registration_message'] = 'Sie werden in Kürze eine E-Mail mit Ihren Accountdaten und Informationen zum Abschluss Ihrer Registrierung erhalten.';

// Activation views
$lang['connect_home_page'] = 'Homepage';
$lang['connect_activation_title'] = 'Account Aktivierung';
$lang['connect_user_activated_message'] = 'Ihr Account ist aktiviert.<br/>Sie können sich auf der Homepage damit anmelden.';
$lang['connect_user_activated_error'] = 'Mit dem Account, welchen Sie gerade aktivieren wollten, scheint etwas schief gelaufen zu sein. Vielleicht haben Sie ihn bereits aktiviert oder Sie verwenden falsche Informationen? Versuchen Sie sich einzuloggen oder bestätigen Sie die E-Mail, welche wir Ihnen geschickt haben.';

$lang['connect_admin_activated_message'] = 'Dieser Account ist nun aktiviert.<br/>Es wurde soeben eine E-Mail an den Benutzer verschickt um Ihn zu informieren.';
$lang['connect_admin_activated_error'] = 'Mit dem Account, welchen Sie gerade aktivieren wollten, scheint etwas schief gelaufen zu sein. Vielleicht haben Sie ihn bereits aktiviert oder Sie verwenden falsche Informationen?';


/* End of file connect_lang.php */
/* Location: ./application/language/en/connect_lang.php */
