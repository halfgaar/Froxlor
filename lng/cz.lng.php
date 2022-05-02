<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, you can also view it online at
 * https://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  the authors
 * @author     Froxlor team <team@froxlor.org>
 * @license    https://files.froxlor.org/misc/COPYING.txt GPLv2
 */

return [
	'2fa' => [
		'2fa' => '2FA možnosti',
		'2fa_enabled' => 'Aktivovat dvoufázové ověření (2FA)',
		'2fa_removed' => '2FA úspěšně odstraněno',
		'2fa_add' => 'Aktivovat 2FA',
		'2fa_delete' => 'Deaktivovat 2FA',
		'2fa_verify' => 'Ověřit kód',
	],
	'admin' => [
		'overview' => 'Přehled',
		'ressourcedetails' => 'Využité zdroje',
		'systemdetails' => 'Detaily systému',
		'froxlordetails' => 'Froxlor detaily',
		'installedversion' => 'Nainstalovaná verze',
		'latestversion' => 'Poslední verze',
		'lookfornewversion' => [
			'clickhere' => 'Hledat pomocí webové služby',
			'error' => 'Chyba při čtení',
		],
		'resources' => 'Zdroje',
		'customer' => 'Zákazník',
		'customers' => 'Zákazníci',
		'customer_add' => 'Vytvořit zákazníka',
		'customer_edit' => 'Upravit zákazníka',
		'domains' => 'Domény',
		'domain_add' => 'Vytvořit doménu',
		'domain_edit' => 'Upravit doménu',
		'subdomainforemail' => 'Subdomény jako emailové domény',
		'admin' => 'Admin',
		'admins' => 'Admini',
		'admin_add' => 'Vytvořit admina',
		'admin_edit' => 'Upravit admina',
		'customers_see_all' => 'Může vidět všechny zákazníky?',
		'domains_see_all' => 'Může vidět všechny domény?',
		'change_serversettings' => 'Může vidět nastavení serveru?',
		'server' => 'Systém',
		'serversettings' => 'Nastavení',
		'rebuildconf' => 'Znovu setstavit konfigurační soubory',
		'stdsubdomain' => 'Standartní subdoména',
		'stdsubdomain_add' => 'Vytvořit standartní subdoménu',
		'phpenabled' => 'PHP povoleno',
		'deactivated' => 'Deaktivováno',
		'deactivated_user' => 'Deaktivovat uživatele',
		'sendpassword' => 'Odeslat heslo',
		'ownvhostsettings' => 'Vlastní vHost-nastavení',
		'configfiles' => [
			'serverconfiguration' => 'Konfigurace',
			'overview' => 'Přehled',
			'wizard' => 'Průvodce',
			'distribution' => 'Distribuce',
			'service' => 'Služba',
			'etc' => 'Ostatní (System)',
			'choosedistribution' => '-- Vyber distribuci --',
			'chooseservice' => '-- Vyber službu --',
			'statistics' => 'Statistics',
		],
		'templates' => [
			'templates' => 'Email-šablony',
			'template_add' => 'Přidat šablonu',
			'template_edit' => 'Upravit šablonu',
			'action' => 'Akce',
			'email' => 'Email & šablony souborů',
			'subject' => 'Předmět',
			'mailbody' => 'Tělo emailu',
			'createcustomer' => 'Uvítací email pro nové zákazníky',
			'pop_success' => 'Uvítací email pro nově založene emaily',
			'template_replace_vars' => 'Variables to be replaced in the template:',
			'SALUTATION' => 'Replaced with a correct salutation (name or company)',
			'FIRSTNAME' => 'Replaced with the customer\'s first name.',
			'NAME' => 'Nahrazeno jménem zákazníka.',
			'COMPANY' => 'Replaces with the customer\'s company name',
			'USERNAME' => 'Replaced with the customer\'s account username.',
			'PASSWORD' => 'Replaced with the customer\'s account password.',
			'EMAIL' => 'Replaced with the address of the POP3/IMAP account.',
			'CUSTOMER_NO' => 'Replaces with the customer number',
			'EMAIL_PASSWORD' => 'Nahrazeno POP3/IMAP heslem účtu.',
			'filecontent' => 'Öbsah souboru',
			'newdatabase' => 'Emailové notifikace o nových databázích',
			'newftpuser' => 'Emailové notifikace o nových ftp uživatelů',
			'CUST_NAME' => 'Jméno zákazníka',
			'DB_NAME' => 'Název databáze',
			'DB_PASS' => 'Heslo databáze',
			'DB_DESC' => 'Popis databáze',
			'DB_SRV' => 'Databázový server',
			'PMA_URI' => 'Odkaz k phpMyAdmin (pokud je postytnut)',
			'USR_NAME' => 'FTP uživatelské jméno',
			'USR_PASS' => 'FTP heslo',
		],
		'webserver' => 'Webový server',
		'ipsandports' => [
			'add' => 'Přidat IP/Port',
			'edit' => 'Upravit IP/Port',
			'enable_ssl' => 'Je tohle SSL port?',
			'ssl_cert_file' => 'Cesta k SSL certifikátu',
			'webserverdefaultconfig' => 'Výchozí konfigurace Webserveru',
		],
		'memorylimitdisabled' => 'Vypnuto',
		'valuemandatory' => 'Tato hodnota je důležitá',
		'serversoftware' => 'Serversoftware',
		'phpversion' => 'PHP-Verze',
		'mysqlserverversion' => 'MySQL verze serveru',
		'webserverinterface' => 'Rozhraní webového serveru',
		'accountsettings' => 'Nastavení účtu',
		'panelsettings' => 'Nastavení panelu',
		'systemsettings' => 'Nastavení systému',
		'webserversettings' => 'Nastavení webového serveru',
		'mailserversettings' => 'Nastavení mailového serveru',
		'nameserversettings' => 'Nameserver settings',
		'updatecounters' => 'Přepočítat využití zdrojů',
		'subcanemaildomain' => [
			'never' => 'Nikdy',
			'choosableno' => 'Volitelné, výchozí ne',
			'choosableyes' => 'Volitelné, výchozí ano',
			'always' => 'Vždy',
		],
		'webalizersettings' => 'Webalizer nastavení',
		'webalizer' => [
			'normal' => 'Normální',
			'quiet' => 'Tiché',
			'veryquiet' => 'Bez výstupu',
		],
		'domain_nocustomeraddingavailable' => 'Momentálně není možné přidat doménu. Nejdříve musíš přidat alespoň jednoho zákazníka.',
		'loggersettings' => 'Log nastavení',
		'logger' => [
			'normal' => 'normální',
			'paranoid' => 'paranoidní',
		],
		'emaildomain' => 'Emailová doména',
		'email_only' => 'Jen email?',
		'wwwserveralias' => 'Přidat "www." ServerAlias',
		'subject' => 'Předmět',
		'recipient' => 'Příjemce',
		'message' => 'Napsat zprávu',
		'text' => 'Zpráva',
		'sslsettings' => 'SSL nastavení',
		'dkimsettings' => 'DomainKey nastavení',
		'caneditphpsettings' => 'Může změnit doménové nastavení spojené s php?',
		'allips' => 'Všechny IP',
		'awstatssettings' => 'AWstats nastavení',
		'domain_dns_settings' => 'DNS nastavení domény',
		'activated' => 'Aktivováno',
		'statisticsettings' => 'Nastavení statistik',
		'sysload' => 'Systémové zatížení',
		'noloadavailable' => 'nedostupné',
		'nouptimeavailable' => 'nedostupné',
		'nosubject' => '(Bez předmětu)',
		'phpsettings' => [
			'title' => 'PHP konfigurace',
			'description' => 'Krátký popis',
			'actions' => 'Akce',
			'editsettings' => 'Změnit PHP nastavení',
			'addsettings' => 'Vytvořit nové PHP nastavení',
			'viewsettings' => 'Zobrazit PHP nastavení',
			'phpinisettings' => 'php.ini nastavení',
			'addnew' => 'Vytvořit novou PHP konfiguraci',
			'fpmdesc' => 'PHP-FPM konfigurace',
			'file_extensions' => 'Přípony souborů',
			'file_extensions_note' => '(bez tečky, oddělené mezerou)',
		],
		'fpmsettings' => [
			'addnew' => 'Vytvořit novou PHP verzi',
		],
		'expert_settings' => 'Expertní nastavení!',
		'phpserversettings' => 'PHP nastavení',
		'mod_fcgid_maxrequests' => [
			'title' => 'Maximum php žádostí pro tuto doménu (ponechte prázdné pro výchozí hodnotu)',
		],
		'contactdata' => 'Kontaktní data',
		'newerversionavailable' => 'Nová verze Froxloru je dostupná',
		'lastlogin_succ' => 'Posledníí přihlášení',
		'ftpserversettings' => 'Nastavení FTP serveru',
		'perlenabled' => 'Perl povolen',
		'traffic' => 'Provoz',
		'domaintraffic' => 'Domény',
		'customertraffic' => 'Zákazníci',
		'assignedmax' => 'Přiřazeno / Max',
		'usedmax' => 'Použito / Max',
		'used' => 'Použito',
		'delete_statistics' => 'Promazat statistiky',
		'speciallogfile' => [
			'title' => 'Oddělit log soubor',
		],
		'domain_editable' => [
			'title' => 'Povolit upravování domény',
		],
		'integritycheck' => 'Ověření databáze',
		'integrityid' => '#',
		'integrityname' => 'Název',
		'integrityresult' => 'Výsledek',
		'integrityfix' => 'Opravit problémy automaticky',
		'movetoadmin' => 'Přesunout zákazníka',
		'note' => 'Poznámka',
		'letsencrypt' => [
			'title' => 'Používat Let\'s Encrypt',
		],
		'autoupdate' => 'Auto-Aktualizace',
		'dnsenabled' => 'Povolit DNS editor',
		'plans' => [
			'description' => 'Popis',
			'last_update' => 'Naposledy aktualizováno',
		],
		'domain_sslenabled' => 'Povolit použití SSL',
	],
	'apcuinfo' => [
		'clearcache' => 'Vyčistit APCu cache',
		'version' => 'APCu verze',
		'phpversion' => 'PHP verze',
		'sharedmem' => 'Sdílená pamět',
		'sharedmemval' => '%d Segment(s) with %s (%s memory)',
		'start' => 'Čas zapnutí',
		'uptime' => 'Uptime',
		'upload' => 'Podpora nahrávání souborů',
		'cachetitle' => 'Cache Information',
		'memnote' => 'Využití paměti <font size=-2>(několik krajíců indikuje fragmenty)</font>',
		'free' => 'Volné',
		'used' => 'Využité',
		'detailmem' => 'Detailní využití paměti a fragmentace',
		'fragment' => 'Fragmentace',
	],
	'apikeys' => [
		'no_api_keys' => 'Žádné API klíče nalezeny',
		'key_add' => 'přidat nový klíč',
		'clicktoview' => 'Klikni pro zobrazení',
		'allowed_from' => 'Povoleno od',
		'valid_until' => 'Platné do',
	],
	'changepassword' => [
		'old_password' => 'Staré heslo',
		'new_password' => 'Nové heslo',
		'new_password_confirm' => 'Potvrdit heslo',
		'new_password_ifnotempty' => 'Nové heslo (prázdné = beze změny)',
		'also_change_ftp' => ' také změní heslo hlavního FTP účtu',
		'also_change_stats' => ' také změní heslo na stránku k statistikám',
	],
	'cron' => [
		'lastrun' => 'naposledy spušteno',
		'isactive' => 'povoleno',
		'description' => 'popis',
	],
	'crondesc' => [
		'cron_letsencrypt' => 'aktualizuji Let\'s Encrypt certifikáty',
	],
	'cronjobs' => [
		'notyetrun' => 'Ještě nespuštěno',
	],
	'customer' => [
		'documentroot' => 'Domovský adresář',
		'name' => 'Název',
		'firstname' => 'Křestní jméno',
		'company' => 'Společnost',
		'street' => 'Ulice',
		'zipcode' => 'PSČ',
		'city' => 'Město',
		'phone' => 'Telefon',
		'fax' => 'Fax',
		'email' => 'Email',
		'customernumber' => 'ID Zákazníka',
		'diskspace' => 'Webový prostor (MiB)',
		'traffic' => 'Provoz (GiB)',
		'mysqls' => 'MySQL-databáze',
		'emails' => 'Email-adresy',
		'accounts' => 'Email-účty',
		'forwarders' => 'Email-forwarders',
		'ftps' => 'FTP-účty',
		'subdomains' => 'Subdomény',
		'domains' => 'Domény',
		'title' => 'Oslovení',
		'country' => 'Země',
		'generated_pwd' => 'Navrhnutí hesla',
		'usedmax' => 'Použito / Max',
		'services' => 'Služby',
	],
	'diskquota' => 'Quota',
	'dkim' => [
		'use_dkim' => [
			'title' => 'Aktivovat DKIM podporu?',
		],
	],
	'dns' => [
		'a_record' => 'A-Záznam (IPv6 volitelný)',
		'cname_record' => 'CNAME-Záznam',
		'mxrecords' => 'Definovat MX záznamy',
		'standardmx' => 'Server standard MX record',
		'mxconfig' => 'Vlastní MX záznamy',
		'priority10' => 'Priorita 10',
		'priority20' => 'Priorita 20',
		'txtrecords' => 'Definovat TXT záznamy',
	],
	'dnseditor' => [
		'edit' => 'upravit DNS',
		'records' => 'záznamy',
	],
	'domain' => [
		'openbasedirpath' => 'OpenBasedir-cesta',
		'docroot' => 'Path from field above',
		'homedir' => 'Domovský adresář',
	],
	'domains' => [
		'description' => 'Zde můžeš vytvořit a upravit (sub-)domémny a změnit jejich cesty.<br />Systém bude chtít nějaký čas pro aplikování nového nastavení po každé změně.',
		'domainsettings' => 'Nastavení domény',
		'domainname' => 'Název domény',
		'subdomain_add' => 'Vytvořit subdoménu',
		'subdomain_edit' => 'Upravit (sub)doménu',
		'wildcarddomain' => 'Vytvořit jako wildcarddoménu?',
		'aliasdomain' => 'Alias pro doménu',
		'noaliasdomain' => 'Doména bez aliasu',
		'statstics' => 'Statistiky využití',
		'isassigneddomain' => 'Je přiřazenou doménou',
		'registration_date' => 'Přidáno do registru',
		'aliasdomains' => 'Alias domén',
		'nosubtomaindomain' => 'Žádná subdoména celé domény',
		'ipandport_ssl_multi' => [
			'title' => 'SSL IP adresa(y)',
		],
		'ssl_redirect' => [
			'title' => 'SSL přesměrování',
		],
		'serveraliasoption_none' => 'Bez aliasu',
		'domain_import' => 'Importovat domény',
		'import_separator' => 'Oddělovač',
		'import_file' => 'CSV-Soubor',
		'termination_date' => 'Datum zrušení',
		'termination_date_overview' => 'zrušeno datem ',
	],
	'emails' => [
		'description' => 'Zde můžeš vytvořit a upravit tvé emailové adresy.<br />Účet je jako poštovní schránka před tvým domem. Pokud ti někdo odešle email, přijde ti do tvého účtu.<br /><br />Pro stažení tvých emailů použij následující nastavení v tvém emailovém klientovi: (Data v <i>italském fontu</i> na ekvivalenty, které jsi vepsal/a!)<br />Název hostitele: <b><i>názevdomény</i></b><br />Uživatel: <b><i>název účtu / emailová addresa</i></b><br />heslo: <b><i>heslo, které jsi si zvolil/a</i></b>',
		'emailaddress' => 'Emailová adresa',
		'emails_add' => 'Vytvořit emailové adresy',
		'emails_edit' => 'Upravit emailovou adresu',
		'catchall' => 'Catchall',
		'iscatchall' => 'Definovat jako catchall-adresu?',
		'account' => 'Účet',
		'account_add' => 'Vytvořit účet',
		'account_delete' => 'Smazat účet',
		'from' => 'Zdroj',
		'to' => 'Cíl',
		'forwarders' => 'Forwarders',
		'forwarder_add' => 'Vytvořit forwarder',
		'alternative_emailaddress' => 'Alternativní emailová adresa',
		'quota' => 'Kvóta',
		'noquota' => 'Bez kvóty',
		'updatequota' => 'Aktualizovat kvótu',
		'back_to_overview' => 'Zpět na přehled',
	],
	'error' => [
		'error' => 'Chyba',
		'directorymustexist' => 'Adresář %s musí existovat. Vytvoř jej prosím v FTP klientovi.',
		'filemustexist' => 'Soubor %s musí existovat.',
		'allresourcesused' => 'Již jsi využil všechny svoje zdroje.',
		'domains_cantdeletemaindomain' => 'Nemůžeš smazat doménu, která je využívána pro emailovou doménu.',
		'domains_canteditdomain' => 'Tuto doménu nemůžeš měnit. Administrátor tuto možnost vypnul.',
		'domains_cantdeletedomainwithemail' => 'Nemůžeš smazat doménu, která je využívána pro emailovou doménu. Nejříve smaž všechny emailové adresy.',
		'firstdeleteallsubdomains' => 'Nejdříve musíš smazat všechny subdomény, než vytvoříš wildcard doménu.',
		'youhavealreadyacatchallforthisdomain' => 'Již jsi definoval catchall pro tuto doménu.',
		'ftp_cantdeletemainaccount' => 'Nemůžeš smazat svůj hlavní FTP účet',
		'login' => 'Zadané uživatelské jméno nebo heslo je špatné. Zkus to prosím za chvíli!',
		'login_blocked' => 'Tento účet byl zablokován po příliš mnoho selhaných pokusech o přihlášení. <br />Zkus to znovu za %s sekund.',
		'notallreqfieldsorerrors' => 'Nic jsi nevyplnil nebo jsi vyplnil některé kolonky špatně.',
		'oldpasswordnotcorrect' => 'Staré heslo není správné.',
		'youcantallocatemorethanyouhave' => 'Nemůžeš přiřadit více prostředků, než vlastníš.',
		'mustbeurl' => 'Nenapsal jsi správnou nebo kompletí odkaz (např. http://somedomain.com/error404.htm)',
		'invalidpath' => 'Nevybral jsi správný odkaz (možná se jedná o problém s dirlisting?)',
		'stringisempty' => 'Chybějící vstup v poli',
		'stringiswrong' => 'Špatný vstup v poli',
		'newpasswordconfirmerror' => 'Nové heslo a jeho potvrzení neodpovídá',
		'mydomain' => '\'Doména\'',
		'mydocumentroot' => '\'Documentroot\'',
		'loginnameexists' => 'Přihlašovací jméno %s již existuje',
		'emailiswrong' => 'Email. adresa %s neplatné znaky nebo není kompletní',
		'alternativeemailiswrong' => 'Zadaná alternativní email. adresa %s k odeslání údajů se zdá být neplatná',
		'loginnameiswrong' => 'Přihlašovací jméno "%s" obsahuje nepovolené znaky.',
		'loginnameiswrong2' => 'Přihlašovací jméno obsahuje příliš mnoho znaků. Jen %s znaky jsou povoleny.',
		'userpathcombinationdupe' => 'Kombinace přihlašovacího jména a cesty již existuje',
		'patherror' => 'Obecná chyba! Cesta nesmí být prázdná',
		'errordocpathdupe' => 'Možnost u cesty %s již existuje',
		'adduserfirst' => 'Nejdřív vytvoř zákazníka, prosím',
		'domainalreadyexists' => 'Doména %s je již přiřazena k zákazníkovi',
		'nolanguageselect' => 'Není vybrán žádný jazyk.',
		'nosubjectcreate' => 'Musíš definovat téma k této emailové šabloně.',
		'nomailbodycreate' => 'Musíš definovat text emailu pro tuto emailovou šablonu.',
		'templatenotfound' => 'Šablona nebyla nalezena.',
		'alltemplatesdefined' => 'Nemůžeš nadefinovat více šablon, všechny jazyky jsou již podporovány.',
		'wwwnotallowed' => 'www není povolena pro subdomény.',
		'subdomainiswrong' => 'Subdoména %s nemůže obsahovat neplatné znaky.',
		'domaincantbeempty' => 'Název domény nemůže být prázdná.',
		'domainexistalready' => 'Doména %s již existuje.',
		'emailexistalready' => 'Emailová adresa %s již existuje.',
		'maindomainnonexist' => 'Hlavní doména %s neexistuje.',
		'myipnotdouble' => 'Tato IP/Port kombinace již existuje.',
		'stringformaterror' => 'Hodnota pro pole "%s" není v očekávaném formátu.',
		'youcantdeleteyourself' => 'Z bezpečnostních důvodů nemůžeš smazat sám sebe.',
		'youcanteditallfieldsofyourself' => 'POZNÁMKA: Nemůžeš upravit všechna pole tvého vlastního účtu kvůli bezpečnosti.',
		'documentrootexists' => 'Adresář "%s" pro tohoto zázaníka již existuje. Odeber to před znovu přidáním tohoto zákazníka.',
		'logerror' => 'Log-Chyba: %s',
		'nomessagetosend' => 'Nezadal/a jsi zprávu.',
		'norecipientsgiven' => 'Nespecifikoval/a jsi žádného příjemce',
		'errorsendingmail' => 'Zpráva uživateli "%s" selhala',
		'cannotreaddir' => 'Nelze přečíst adresář "%s"',
		'invalidip' => 'Neplatná IP adresa: %s',
		'cannotwritetologfile' => 'Nelze otevřít log soubor %s pro zápis',
		'phpsettingidwrong' => 'Konfigurace s tímto ID neexistuje',
		'descriptioninvalid' => 'Popis je moc krátký, dlouhý nebo obsahuje nepovolené znaky.',
		'filecontentnotset' => 'Soubor nemůže být prázdný!',
		'customerdoesntexist' => 'Zvolený zákazník neexistuje.',
		'admindoesntexist' => 'Zvolený administrátor neexistuje.',
		'intvaluetoolow' => 'Zadané číslo je přiliš malé (pole %s)',
		'intvaluetoohigh' => 'Zadané číslo je příliš vysoké (pole %s)',
		'session_timeout' => 'Moc nízká hodnota',
		'operationnotpermitted' => 'Operace nepovolena!',
		'featureisdisabled' => 'Funkce %s je vypnuta. Kontaktuj prosím providera.',
		'usercurrentlydeactivated' => 'Uživatel %s je momentálně deaktivován',
		'no_phpinfo' => 'Omlouváme se, ale phpinfo() nelze načíst',
		'customized_version' => 'Vypadá to, že tvá instalace Froxloru byla upravována, podpora byla zrušena, promiň.',
		'autoupdate_0' => 'Neznámá chyba',
		'autoupdate_1' => 'PHP nastavení allow_url_fopen je vypnuté. Automatická aktualizace toto nastavení potřebuje v php.ini',
		'autoupdate_2' => 'PHP zip rozšíření nebylo nalezeno, ujisti se, že je nainstalované a aktivované',
		'autoupdate_4' => 'Froxlor archiv nemohl být uložen na disku :(',
		'autoupdate_5' => 'version.froxlor.org vrátila nepřijatelné hodnoty :(',
		'autoupdate_6' => 'Uf, nebyla nalezena (platná) verze ke stažení :(',
		'autoupdate_7' => 'Stažený archiv nebyl nalezen :(',
		'autoupdate_8' => 'Archiv nemohl být extrahován :(',
		'autoupdate_9' => 'Stažený soubor neprošel testem integrity. Zkus aktualizaci znovu.',
		'autoupdate_10' => 'Minimální podporovaná verze PHP je 7.4.0',
		'dns_domain_nodns' => 'DNS pro tuto doménu je vypnuto',
	],
	'extras' => [
		'description' => 'Zde můžeš přidat dodatečné věci, např. ochranu odresáře.<br />Systém bude potřebovat nějaký čas pro aplikování změn.',
		'directoryprotection_add' => 'Přidat ocrhanu adresáře',
		'view_directory' => 'Zobrazit obsah adresáře',
		'pathoptions_add' => 'Přidat možnosti cesty',
		'directory_browsing' => 'Procházení obsahu adresáře',
		'pathoptions_edit' => 'Upravit možnosti cesty',
		'execute_perl' => 'Spustit perl/CGI',
		'backup' => 'Vytvořit zálohu',
		'backup_web' => 'Zálohovat web-data',
		'backup_mail' => 'Zálohovat mail-data',
		'backup_dbs' => 'Zálohovat databáze',
	],
	'ftp' => [
		'description' => 'Zde můžeš tvořit a upravovat tvé FTP-účty.<br />Změny jsou uskutečněny okamžitě a účty mohou být použity ihned.',
		'account_add' => 'Vytvořit účet',
		'account_edit' => 'Upravit ftp účet',
	],
	'gender' => [
		'title' => 'Titul',
		'male' => 'Pan.',
		'female' => 'Paní.',
		'undef' => '',
	],
	'index' => [
		'customerdetails' => 'Detaily zákazníka',
		'accountdetails' => 'Detaily účtu',
	],
	'logger' => [
		'date' => 'Datum',
		'type' => 'Typ',
		'action' => 'Akce',
		'user' => 'Uživatel',
		'truncate' => 'Prázdný log',
		'admin' => 'Administrátor',
		'login' => 'Přihlášení',
		'intern' => 'Interní',
		'unknown' => 'Neznámý',
	],
	'login' => [
		'username' => 'Uživatelské jméno',
		'password' => 'Heslo',
		'language' => 'Jazyk',
		'login' => 'Přihlásit se',
		'logout' => 'Odhlásit se',
		'profile_lng' => 'Jazyk profilu',
		'forgotpwd' => 'Zapomněl jsi heslo?',
		'presend' => 'Resetovat heslo',
		'email' => 'Emailová addresa',
		'remind' => 'Resetovat mé heslo',
		'usernotfound' => 'Uživatel nenalezen!',
		'2fa' => 'Dvoufázové ověření (2FA)',
		'2facode' => 'Prosím zadej 2FA kód',
	],
	'mails' => [
		'pop_success' => [
			'subject' => 'Emailový účet nastaven úspěšně',
		],
		'createcustomer' => [
			'subject' => 'Informace o účtu',
		],
		'password_reset' => [
			'subject' => 'Resetovat heslo',
		],
	],
	'menu' => [
		'message' => 'Zprávy',
	],
	'menue' => [
		'main' => [
			'main' => 'Hlavní',
			'changepassword' => 'Změnit heslo',
			'changelanguage' => 'Změnit jazyk',
			'username' => 'Přihlášen/a jako: ',
			'changetheme' => 'Změnit téma',
			'apihelp' => 'API pomoc',
			'apikeys' => 'API klíče',
		],
		'email' => [
			'email' => 'Email',
			'emails' => 'Adresy',
			'webmail' => 'Webmail',
		],
		'mysql' => [
			'mysql' => 'MySQL',
			'databases' => 'Databáze',
			'phpmyadmin' => 'phpMyAdmin',
		],
		'domains' => [
			'domains' => 'Domény',
			'settings' => 'Nastavení',
		],
		'ftp' => [
			'ftp' => 'FTP',
			'accounts' => 'Účty',
			'webftp' => 'WebFTP',
		],
		'extras' => [
			'extras' => 'Extra',
			'directoryprotection' => 'Ochrana adresáře',
			'pathoptions' => 'Možnosti cesty',
			'backup' => 'Záloha',
		],
		'traffic' => [
			'traffic' => 'Provoz',
			'current' => 'Momentální měsíc',
			'table' => 'Provoz',
		],
		'phpsettings' => [
			'maintitle' => 'PHP konfigurace',
		],
		'logger' => [
			'logger' => 'Systémový log',
		],
	],
	'message' => [
		'norecipients' => 'Email nebyl odeslán, protože databáze neobsahuje žádné příjemce',
	],
	'mysql' => [
		'databasename' => 'Název uživetele/databáze',
		'databasedescription' => 'Popis databáze',
		'database_create' => 'Vytvořit databázi',
		'size' => 'Velikost',
	],
	'opcacheinfo' => [
		'resetcache' => 'Resetovat OPcache',
		'version' => 'OPCache verze',
		'phpversion' => 'PHP verze',
		'start' => 'Čas zapnutí',
		'lastreset' => 'Poslední restart',
		'oomrestarts' => 'OOM restart count',
		'hashrestarts' => 'Hash restart count',
		'manualrestarts' => 'Manual restart count',
		'status' => 'Stav',
		'cachefull' => 'Cache je plný',
		'restartinprogress' => 'Restart právě probíhá',
		'memusage' => 'Využití paměti',
		'totalmem' => 'Celková pamět',
		'usedmem' => 'Využitá paměť',
		'freemem' => 'Volná pamět',
		'used' => 'Využité',
		'free' => 'Volné',
		'blacklist' => 'Černá listina',
		'novalue' => '<i>bez hodnoty</i>',
	],
	'panel' => [
		'edit' => 'Upravit',
		'delete' => 'Smazat',
		'create' => 'Vytvořit',
		'save' => 'Uložit',
		'yes' => 'Ano',
		'no' => 'Ne',
		'path' => 'Cesta',
		'toggle' => 'Toggle',
		'next' => 'Další',
		'dirsmissing' => 'Nemůžu najít nebo přečíst adresář!',
		'pathorurl' => 'Cesta nebo URL',
		'ascending' => 'vzestupně',
		'descending' => 'sestupně',
		'search' => 'Hledat',
		'used' => 'použito',
		'translator' => 'Překladač',
		'reset' => 'Zahodit změny',
		'pathDescription' => 'Pokud adresář neexistuje, bude automaticky vytvořen.',
		'back' => 'Zpět',
		'reseller' => 'prodejce',
		'admin' => 'admin',
		'customer' => 'zákazník/ci',
		'send' => 'odeslat',
		'nosslipsavailable' => 'Momentálně zde nejsou žádné ssl ip/port kombinace pro tento server',
		'backtooverview' => 'Zpět na přehled',
		'dateformat' => 'RRRR-MM-DD',
		'dateformat_function' => 'R-m-d',
		'timeformat_function' => 'H:i:s',
		'default' => 'Výchozí',
		'never' => 'Nikdy',
		'active' => 'Aktivní',
		'please_choose' => 'Zvol prosím',
		'allow_modifications' => 'Povolit modifikace',
		'not_supported' => 'Nepodporováno v: ',
		'neverloggedin' => 'Zatím bez přihlášení',
		'theme' => 'Téma',
		'variable' => 'Variable',
		'description' => 'Popis',
		'cancel' => 'Zrušit',
		'ssleditor' => 'SSL nastavené pro tuto doménu',
		'dashboard' => 'Nástěnka',
		'assigned' => 'Přiřazen',
		'available' => 'Dostupný',
		'letsencrypt' => 'Používá Let\'s encrypt',
		'set' => 'Použít',
		'none_value' => 'Nic',
	],
	'pwdreminder' => [
		'success' => 'Žádost o reset hesla úspěšně odeslána. Následuj prosím instrukce v emailu, který jsi obdržel/a.',
		'notallowed' => 'Resetování hesla je vypnuto',
	],
	'question' => [
		'question' => 'Bezpečnostní otázka',
		'admin_customer_reallydelete' => 'Opravdu chceš smazat zákazníka %s? Tuto akci nelze vrátit zpět!',
		'admin_domain_reallydelete' => 'Opravdu chceš smazat doménu %s?',
		'mysql_reallydelete' => 'Opravdu chceš smazat databázi %s? Tento krok je nevratný!',
		'admin_customer_alsoremovefiles' => 'Smazat i soubory uživatelů?',
		'admin_ip_reallydelete' => 'Opravdu chceš odebrat IP adresu %s?',
		'admin_counters_reallyupdate' => 'Opravdu chceš přepočítat využití zdrojů?',
	],
	'redirect_desc' => [
		'rc_movedperm' => 'permanentně přesunuto',
	],
	'serversettings' => [
		'documentroot_prefix' => [
			'title' => 'Domovský adresář',
		],
		'bindreload_command' => [
			'title' => 'Příkaz pro znovu načtení DNS serveru',
			'description' => 'Jaký je příkaz pro znovu načtení dns serveru?',
		],
		'vmail_uid' => [
			'description' => 'Jaké uživatelsk=e ID by měly emaily mít?',
		],
		'vmail_gid' => [
			'description' => 'Jaké skupinové ID by měly emaily mít?',
		],
		'vmail_homedir' => [
			'title' => 'Domovská složka pro emaily',
			'description' => 'Kde by všechny emaily měly být uloženy?',
		],
		'adminmail' => [
			'title' => 'Odesílatel',
			'description' => 'Jaká je adresa odesílatele na emaily odeslané z panelu?',
		],
		'phpmyadmin_url' => [
			'description' => 'Jaké je URL do phpMyAdmin? (musí začínat with http(s)://)',
		],
		'webmail_url' => [
			'title' => 'Webový mail URL',
			'description' => 'Jaké je URL do webového mailu? (musí začínath http(s)://)',
		],
		'webftp_url' => [
			'description' => 'Jaké je URL do WebFTP? (musí začínat http(s)://)',
		],
		'language' => [
			'description' => 'Jaký je tvůj standartní jazyk serveru?',
		],
		'maxloginattempts' => [
			'title' => 'Max. pokusů o přihlášení',
			'description' => 'Maximum pokusů o přihlášení do deaktivace účtu.',
		],
		'deactivatetime' => [
			'title' => 'Čas deaktivace',
			'description' => 'Čas (v sek.) po kterých se účet deaktivuje po několika neúspěšných pokusech o přihlášení.',
		],
		'pathedit' => [
			'title' => 'Typ obsahu cesty',
			'description' => 'Měla by cesta být na výběr z rozbalovací nabídky nebo jen zadána do textového pole?',
		],
		'nameservers' => [
			'title' => 'Názvy serverů',
			'description' => 'Seznam oddělený čárkami obsahující názvy hostitelů všech jmenných serverů. První bude primární.',
		],
		'mxservers' => [
			'title' => 'MX servery',
			'description' => 'Seznam oddělený čárkami obsahující dvojici čísla a jméno hostitele oddělené mezerou (např. \'10 mx.example.com\') obsahující servery mx.',
		],
		'defaultip' => [
			'title' => 'Výchozí IP/Port',
		],
		'defaultsslip' => [
			'title' => 'Výchozí SSL IP/Port',
		],
		'deactivateddocroot' => [
			'title' => 'Docroot pro deaktivované uživatele',
		],
		'mailpwcleartext' => [
			'title' => 'Také ukládat hesla emailů nezašifrované v databázi',
		],
		'ftpdomain' => [
			'title' => 'FTP účty @domain',
			'description' => 'Zákazníci mohou vytvářet FTP účty user@customerdomain?',
		],
		'mod_fcgid' => [
			'title' => 'Povolit FCGID',
			'configdir' => [
				'title' => 'Konfigurace adresářů',
				'description' => 'Kde by fcgid-konfigurační soubory měly být uloženy? Pokud nepoužíváš vlastně kompilovanou suexec knihovnu, tak tato cesta musí být pod /var/www/<br /><br /><div class="text-danger">POZNÁMKA: Obsah této složky se pravidělně promazává, takže se vyhýbej manuálnímu uklání dat zde.</div>',
			],
			'tmpdir' => [
				'title' => 'Dočasný adresář',
			],
			'maxrequests' => [
				'title' => 'Maximum požadavků na doménu',
				'description' => 'Kolik požadavků na doménu by mělo být povoleno?',
			],
		],
		'webalizer_quiet' => [
			'title' => 'Webalizer výstup',
			'description' => 'Verbosity of the webalizer-program',
		],
		'logger' => [
			'enable' => 'Logging zapnuto/vypnuto',
			'severity' => 'Logging úroveň',
			'logcronoption' => [
				'never' => 'Nikdy',
				'once' => 'Jednou',
				'always' => 'Vždy',
			],
		],
		'ssl' => [
			'use_ssl' => [
				'title' => 'Povolit SSL využití',
				'description' => 'Tohle zaškrtni, pokud chceš používat SSL pro tvůj webový server',
			],
			'ssl_cert_file' => [
				'title' => 'Cesta k SSL certifikátu',
				'description' => 'Specifikujte cestu k souboru obsahující v názvu .crt nebo .pem koncovku (hlavní certifikát)',
			],
			'openssl_cnf' => 'Výchozí nastavení pro tvorbu Cert souboru',
		],
		'default_vhostconf' => [
			'title' => 'Výchozí vHost-nastavení',
		],
		'webalizer_enabled' => 'Povolit webalizer statistiky',
		'awstats_enabled' => 'Povolit AWstats statistiky',
		'selfdnscustomer' => [
			'title' => 'Povolit zákazníkům upravovat dns nastavení domén',
		],
		'unix_names' => [
			'title' => 'Použít kompatibilní přezdívky s UNIX ',
		],
		'allow_password_reset' => [
			'title' => 'Povolit resetování hesla pro zákazníky',
		],
		'allow_password_reset_admin' => [
			'title' => 'Povolit reset hesla pro adminy',
		],
		'panel_password_min_length' => [
			'title' => 'Minimální délka hesla',
		],
		'perl_path' => [
			'title' => 'Cesta k perl',
			'description' => 'Výchozí je /usr/bin/perl',
		],
		'perl_server' => [
			'title' => 'Perl umístění na serveru',
		],
		'phpfpm' => [
			'title' => 'Zapnout php-fpm',
		],
		'default_theme' => 'Výchozí téma',
		'diskquota_enabled' => 'Kvóta aktivována?',
		'apache_24' => [
			'title' => 'Použít modifikace pro Apache 2.4',
		],
		'systemdefault' => 'Základní systém. nastavení',
		'panel_allow_theme_change_admin' => 'Povolit amdinům změnit téma',
		'mailtraffic_enabled' => [
			'title' => 'Analyzovat mailový provoz',
		],
		'letsencryptstate' => [
			'description' => 'State used to generate Let\'s Encrypt certificates.',
		],
		'leenabled' => [
			'title' => 'Zapnout Let\'s Encrypt',
		],
		'caa_entry' => [
			'title' => 'Generovat CAA DNS záznamy',
		],
		'backupenabled' => [
			'title' => 'Povolit zálohy pro zákazníky',
		],
		'mail_smtp_passwd' => 'SMTP heslo',
	],
	'success' => [
		'messages_success' => 'Zpráva úspěšně odeslána %s příjemcům,',
		'success' => 'Informace',
		'clickheretocontinue' => 'Klikni zde pro pokračování',
		'settingssaved' => 'Nastavení bylo úspěšně uloženo.',
		'domain_import_successfully' => 'Úspěšně importováno %s domén.',
		'testmailsent' => 'Testovací email byl odeslán úspěšně',
	],
	'tasks' => [
		'CREATE_QUOTA' => 'Set quota on filesystem',
	],
	'traffic' => [
		'month' => 'Měsíc',
		'day' => 'Den',
		'months' => [
			1 => 'Leden',
			2 => 'Únor',
			3 => 'Březen',
			4 => 'Duben',
			5 => 'Květen',
			6 => 'Červen',
			7 => 'Červenec',
			8 => 'Srpen',
			9 => 'Září',
			10 => 'Říjen',
			11 => 'Listopad',
			12 => 'Prosinec',
			'jan' => 'Led',
			'feb' => 'Úno',
			'mar' => 'Bře',
			'apr' => 'Dub',
			'may' => 'Kvě',
			'jun' => 'Čer',
			'jul' => 'Čer',
			'aug' => 'Srp',
			'sep' => 'Zář',
			'oct' => 'Říj',
			'nov' => 'Lis',
			'dec' => 'Pro',
			'total' => 'Celkem',
		],
		'mb' => 'Provoz (MiB)',
		'sumhttp' => 'Celkový HTTP-Provoz',
		'sumftp' => 'Celkový FTP-Provoz',
		'summail' => 'Celkový Mail-Provoz',
		'customer' => 'Zákazník',
		'domain' => 'Doména',
		'trafficoverview' => 'Shrnutí provozu podle',
		'details' => 'Detaily',
	],
	'translator' => '',
];
