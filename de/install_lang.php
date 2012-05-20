<?php

$lang = array();

/* Allgemein */
$lang['title_ionize_installation'] = 		'Installation';

$lang['title_system_check'] = 		'Systemanforderungen';
$lang['title_database_settings'] = 	'Datenbank Einstellungen';
$lang['title_user_account'] = 	'Administrator Account';
$lang['title_default_language'] = 	'Standardsprache';
$lang['title_sample_data'] = 	'Die Beispieldaten installieren?';

$lang['button_next_step'] = 		'Nächster Schritt';
$lang['button_skip_next_step'] = 	'Überspringen & nächster Schritt';
$lang['button_save_next_step'] = 	'Speichern & nächster Schritt';
$lang['button_install_test_data'] = 	"Beispieldaten installieren";
$lang['button_start_migrate'] = 		'Datenbankmigration starten';

$lang['nav_check'] = 'Systemanforderungen';
$lang['nav_db'] = 'Datenbank';
$lang['nav_settings'] = 'Einstellungen';
$lang['nav_end'] = 'Ende';
$lang['nav_data'] = 'Beispiel';


/* Systemanforderungen */
$lang['php_version'] = 			'PHP >= 5';
$lang['php_version_found'] = 	'PHP Version';
$lang['mysql_support'] = 		'MySQL Support';
$lang['mysql_version_found'] = 	'MySQL Version';
$lang['file_uploads'] = 		'File Upload';
$lang['mcrypt'] = 				'PHP Mcrypt Lib';
$lang['gd_lib'] = 				'PHP GD Lib';
$lang['write_config_dir'] = 	'<b>/application/config/</b>';
$lang['write_files'] = 			'<b>/files/*</b>';
$lang['write_themes'] = 		'<b>/themes/*</b>';
$lang['config_check_errors'] = 	'Einige Grundanforderungen werden nicht erfüllt.<br/>Bitte prüfen Sie diese, bevor Sie mit der Installation fortfahren.';
$lang['welcome_text'] = 		"<p>Willkommen ! Die folgenden Schritte führen Sie durch die Ionize Installation.</p>";
$lang['write_check_text'] = 	"<p>Folgende Ordner und Dateien müssen beschreibbar sein...</p>";
// $lang['system_check_text'] = 	"<p>Ionize needs all of these settings to be OK.</p>";

$lang['title_folder_check'] = 	"Folgende Ordner müssen beschreibbar sein";
$lang['title_files_check'] = 	"Folgende Dateien müssen beschreibbar sein";
 

/* Datenbank */
$lang['database_driver'] = 			'Driver';
$lang['database_hostname'] = 		'Hostname';
$lang['database_name'] = 			'Datenbank';
$lang['database_username'] = 		'Benutzer';
$lang['database_password'] = 		'Passwort';
$lang['database_create'] = 			'Die Datenbank erstellen';
$lang['title_database_create'] = 	'Datenbankerstellung';
$lang['db_create_text'] = 			"<p>Ionize wird Ihre Datenbank installieren oder migrieren:</p><p><b class=\"highlight\">Neue Installation</b> : Die Datenbank und die Tabellen werden erstellt<br/><b class=\"highlight2\">Upgrade</b> : Der nächste Schritt wird prüfen, ob ein Upgrade nötig ist</p>";
$lang['db_create_prerequisite'] = 			"Der Benutzer muss die Rechte besitzen, Datenbanken zu erstellen.<br/>Falls Ihre Datenbank bereits besteht, können Sie fortfahren.";
$lang['database_error_missing_settings'] = 	'Einige Informationen fehlen.<br/>Bitte füllen Sie alle Felder aus !';
$lang['database_success_install'] = 		'<b class="ex">Die Datenbank wurde erfolgreich installiert.</b>';
$lang['database_success_install_no_settings_needed'] = 		'<b class="ex">Datenbank OK.</b><br/>Da die Datenbank bereits existiert, wird der Schritt der Webseiteneinstellungen übersprungen.';
$lang['database_success_migrate'] = 		'<b class="ex">Die Datenbank wurde erfolgreich geupgraded.</b>';
$lang['database_error_coud_not_connect'] = 		'Die Verbindung zur Datenbank konnte nicht hergestellt werden.';
$lang['database_error_database_dont_exists'] = 		"Die Datenbank existiert nicht !";
$lang['database_error_writing_config_file'] = 		"<b>Fehler :</b><br/>Die Datei <b style=\"color:#000;\">/application/config/database.php</b> konnte nicht beschrieben werden!<br/>Überprüfen Sie Ihre Berechtigungen.";
$lang['database_error_coud_not_write_database'] = 		"<b>Fehler :</b><br/> Konnte Daten nicht in die Datenbank schreiben.<br/>Überprüfen Sie Ihre DB Berechtigungen.";
$lang['database_error_coud_not_create_database'] = "Der Installer kann die Datenbank nicht erstellen. Überprüfen Sie den Datenbank Namen oder Ihre Berechtigungen";
$lang['database_error_no_ionize_tables'] = 			"Die ausgewählte Datenbank scheint nicht von Ionize zu sein. Bitte überprüfen Sie dies.";
$lang['database_error_no_users_to_migrate'] = 		"To user account to upgrade";

$lang['database_migration_from'] = 			'Diese Datenbank benötigt ein Upgrade.<br/>Upgrade von Version : ';

$lang['database_migration_text'] = 		"<p class=\"error\"><b>NOTIZ :</b><br/> Die Datenbank wird jetzt geupgraded.<b><br/>Bitte erstellen Sie ein Backup Ihrer Datenbank, bevor Sie fortfahren.</p>";


/* Einstellungen */
$lang['lang_code'] = 		'Code (2 Zeichen)';
$lang['lang_name'] = 		'Label';
$lang['settings_default_lang_title'] = 		'Standardsprache';
$lang['settings_default_lang_text'] = 		'Ihre Webseite benötigt eine Standardsprache.<br/>Sie können <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_639-1">die Wikipedia ISO 639-1 Seite</a> besuchen, um weitere Informationen zu erhalten.';
$lang['settings_error_missing_lang_code'] = "Der Sprachcode ist zwingend";
$lang['settings_error_missing_lang_name'] = "Der Sprachname ist zwingen";
$lang['settings_error_lang_code_2_chars'] = "Der Sprachcode muss 2 Zeichen sein. Beispiel : \"de\"";
$lang['settings_error_write_rights'] = "Keine Schreibberechtigung auf <b>/application/config/laguage.php</b>. Bitte überprüfen Sie die PHP Berechtigungen der Datei.";
$lang['settings_error_write_rights_config'] = "Keine Schreibberechtigung auf <b>/application/config/config.php</b>. Bitte überprüfen Sie die PHP Berechtigungen der Datei.";
$lang['settings_error_admin_url'] = "Die Admin URL muss eine alphabetische Kette ohne Leerzeichen und Sonderzeichen sein";
$lang['settings_admin_url_title'] = 		'Administrationspanel URL';
$lang['settings_admin_url_text'] = 		'Es wird dringend empfohlen, nicht den Standardpfad zu verwenden.';
$lang['admin_url'] = 'Admin URL';


/* Benutzer */
$lang['user_introduction'] = 	'Mit folgendem Account werden Sie sich in die Administration einloggen.';
$lang['username'] = 			'Login (min. 4 Zeichen)';
$lang['screen_name'] = 			'Voller Name';
$lang['email'] = 				'E-Mail';
$lang['password'] = 			'Passwort (min. 4 Zeichen)';
$lang['password2'] = 			'Passwort bestätigen';
$lang['user_error_missing_settings'] = 			'Bitte füllen Sie alle Felder aus !';
$lang['user_error_not_enough_char'] = 			'Login und Passwort muss mindestens 4 Zeichen lang sein!';
$lang['user_error_email_not_valid'] = 			'Die E-Mail ist nicht gültig. Bitte überprüfen Sie die Eingabe.';
$lang['user_error_passwords_not_equal'] = 		'Passwort und Passwort bestätigen stimmt nicht überein.	';
$lang['user_info_admin_exists'] = 		'In der Datenbank existiert bereits ein Administrator.<br/>Sie können diesen Schritt überspringen, falls Sie keinen neuen anlegen wollen.';
$lang['encryption_key'] = 			'Verschlüsselungskey';
$lang['encryption_key_text'] = 		"Ionize benötigt einen 128 bits Verschlüsselungsey.<br />
									Dieser Schlüssel wird alle sensiblen Accountdaten verschlüsseln.
									Er wird in die <b>/application/config/config.php</b> Datei geschrieben.";
$lang['no_encryption_key_found'] = 	"Der Verschlüsselungskey wurde nicht gefunden. Die Accounts wurden nicht migriert. <b>Sie müssen einen neuen Administrator anlegen</b>.";


/* Beispieldaten */
$lang['data_install_intro'] = 	"<p>Falls Sie Ionize das erste mal nutzen, wird dringend empfohlen die Beispieldaten zu installieren.<br/>
								Die Webseite enthält : </p>
								<ul>
									<li>Ein ganzes Set an Daten, nützlich um Ionize zu testen,</li>
									<li>1 vollständiges Theme</li>
								</ul>
								";
$lang['title_skip_this_step'] = 	"Diesen Schritt überspringen";


/* Finalisierung */
$lang['title_finish'] = 		'Installation abgeschlossen';
$lang['finish_text'] = 			'<b>WICHTIG</b>: <br/>Sie müssen den "<b>/install</b>" Ordner manuell löschen, bevor Sie die Webseite oder die Administration aufrufen.';
$lang['button_go_to_admin'] = 	'Gehe zur Administration';
$lang['button_go_to_site'] = 	'Gehe zur Webseite';