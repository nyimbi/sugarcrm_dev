<?php

/*

Modification information for LGPL compliance

r56990 - 2010-06-16 13:05:36 -0700 (Wed, 16 Jun 2010) - kjing - snapshot "Mango" svn branch to a new one for GitHub sync

r56989 - 2010-06-16 13:01:33 -0700 (Wed, 16 Jun 2010) - kjing - defunt "Mango" svn dev branch before github cutover

r55980 - 2010-04-19 13:31:28 -0700 (Mon, 19 Apr 2010) - kjing - create Mango (6.1) based on windex

r51719 - 2009-10-22 10:18:00 -0700 (Thu, 22 Oct 2009) - mitani - Converted to Build 3  tags and updated the build system 

r51634 - 2009-10-19 13:32:22 -0700 (Mon, 19 Oct 2009) - mitani - Windex is the branch for Sugar Sales 1.0 development

r50375 - 2009-08-24 18:07:43 -0700 (Mon, 24 Aug 2009) - dwong - branch kobe2 from tokyo r50372

r43691 - 2009-01-29 15:25:53 -0800 (Thu, 29 Jan 2009) - faissah - 27521  : Update to phpmailer version 2.3.

r42807 - 2008-12-29 11:16:59 -0800 (Mon, 29 Dec 2008) - dwong - Branch from trunk/sugarcrm r42806 to branches/tokyo/sugarcrm

r11652 - 2006-02-21 18:24:06 -0800 (Tue, 21 Feb 2006) - chris - Bug 4719: updating PHPMailer classes for security (DDoS)
Touched:
include/phpmailer (everything)
include/SugarPHPMailer.php (adding our constructor)
modules/Email/Email.php (to use the new constructor)

r915 - 2004-10-08 15:31:10 -0700 (Fri, 08 Oct 2004) - julian - E-mail notification feature + new admin console


*/


/**
 * PHPMailer language file.
 * German Version
 * Thanks to Yann-Patrick Schlame for the latest update!
 */

$PHPMAILER_LANG = array();

$PHPMAILER_LANG["provide_address"]      = 'Bitte geben Sie mindestens eine ' .
                                          'Empf&auml;nger Emailadresse an.';
$PHPMAILER_LANG["mailer_not_supported"] = ' mailer wird nicht unterst&uuml;tzt.';
$PHPMAILER_LANG["execute"]              = 'Konnte folgenden Befehl nicht ausf&uuml;hren: ';
$PHPMAILER_LANG["instantiate"]          = 'Mail Funktion konnte nicht initialisiert werden.';
$PHPMAILER_LANG["authenticate"]         = 'SMTP Fehler: Authentifizierung fehlgeschlagen.';
$PHPMAILER_LANG["from_failed"]          = 'Die folgende Absenderadresse ist nicht korrekt: ';
$PHPMAILER_LANG["recipients_failed"]    = 'SMTP Fehler: Die folgenden ' .
                                          'Empf&auml;nger sind nicht korrekt: ';
$PHPMAILER_LANG["data_not_accepted"]    = 'SMTP Fehler: Daten werden nicht akzeptiert.';
$PHPMAILER_LANG["connect_host"]         = 'SMTP Fehler: Konnte keine Verbindung zum SMTP-Host herstellen.';
$PHPMAILER_LANG["file_access"]          = 'Zugriff auf folgende Datei fehlgeschlagen: ';
$PHPMAILER_LANG["file_open"]            = 'Datei Fehler: konnte folgende Datei nicht &ouml;ffnen: ';
$PHPMAILER_LANG["encoding"]             = 'Unbekanntes Encoding-Format: ';
$PHPMAILER_LANG["signing"]              = 'Fehler beim Signieren: ';

?>