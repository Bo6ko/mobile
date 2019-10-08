<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE',						0644);
define('FILE_WRITE_MODE',						0666);
define('DIR_READ_MODE',							0755);
define('DIR_WRITE_MODE',						0777);

/*
|--------------------------------------------------------------------------
| Smarty directories
|--------------------------------------------------------------------------
|
| These directories are used for smarty: cache, compile and templates
|
*/
define('SMARTY_CACHE_DIR',						APPPATH.'config/'.ENVIRONMENT.'/smarty/cache/');
define('SMARTY_COMPILE_DIR',					APPPATH.'config/'.ENVIRONMENT.'/smarty/compile/');
define('SMARTY_TEMPLATE_DIR',					APPPATH.'views/');

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb');
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b');
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/*
|--------------------------------------------------------------------------
| File Path
|--------------------------------------------------------------------------
|
| These paths are used when working with project folders
|
*/

define('LOCAL_PATH',							str_replace('system/','',BASEPATH));
define('LOCAL_PATH_MANAGER',					LOCAL_PATH.'manager/');
define('LOCAL_PATH_IMAGES',						LOCAL_PATH.'images/');
define('LOCAL_PATH_FILES',						LOCAL_PATH.'files/');

define('WEB_PATH',								'http://'.$_SERVER['HTTP_HOST'].'/');
define('WEB_PATH_MANAGER',						WEB_PATH.'manager/');
define('WEB_PATH_IMAGES',						WEB_PATH.'images/');
define('WEB_PATH_FILES',						WEB_PATH.'files');

/*
|--------------------------------------------------------------------------
| Database tables
|--------------------------------------------------------------------------
|
| These constants are used when working with database tables
|
*/
define('TABLE_VEHICULES',						'vehicules');
define('TABLE_VEHICULE_BRANDS',					'vehicule_brands');
define('TABLE_VEHICULE_MODELES',				'vehicule_modeles');
define('TABLE_VEHICULE_MARQUES',				'vehicule_marques');
define('TABLE_VEHICULE_COLORS',					'vehicule_colors');
define('TABLE_VEHICULE_ENGINES',				'vehicule_engines');
define('TABLE_VEHICULE_CARROSSERIES',			'vehicule_carrosseries');
define('TABLE_VEHICULE_EQUIPEMENTS',			'vehicule_equipements');
define('TABLE_VEHICULE_CHARACTERISTICS',		'vehicule_characteristics');
define('TABLE_VEHICULES_EQUIPEMENTS',			'vehicules_equipements');
define('TABLE_VEHICULES_CHARACTERISTICS',		'vehicules_characteristics');

/*
|--------------------------------------------------------------------------
| Project constants
|--------------------------------------------------------------------------
|
| These constants are used when working with project settings
|
*/
define('NOREPLY',								str_replace('www.', '', ENVIRONMENT));
define('MANAGER',								'CPM system');
define('MANAGER_VERSION',						'0.4beta');
define('MANAGER_AUTHOR',						'CP Manager');
define('MANAGER_SUPPORT',						'');
define('PROJECT',								'3wnet - CMS');
define('PROJECT_EMAIL_NOREPLY',					'noreply@'.NOREPLY);
define('PROJECT_EMAIL_FROM',					'noreply@'.NOREPLY);
define('PROJECT_EMAIL_NAME_FROM',				'W3CMS');
define('PROJECT_EMAIL_TO',						'vasil.webi@gmail.com');
define('PROJECT_EMAIL_COPY',					'vasil.webi@gmail.com');
define('PROJECT_EMAIL_BCC',						'vasil.webi@gmail.com');
define('ROBOTS',								'noindex, nofollow');
define('REVISIT_AFTER',							'5 days');
define('MAX_ARCHIVE_SIZE',						pow(1024, 3)); // 1GB
define('MAX_ARCHIVE_SIZE_LABEL',				'1 Go'); // 1GB

define('MANAGER_LABEL',							'Système d\'administration');


/*
|--------------------------------------------------------------------------
| Buttons and messages
|--------------------------------------------------------------------------
|
| These constants are used when working with manager buttons and messages
|
*/
define('BTN_UPDATE',							'Mise à jour');
define('BTN_CREATE',							'Ajouter');
define('MSG_SYSTEM_ERROR',						'Error: Pas notifié au système.');
define('MSG_UPDATE_ERROR',						'Error: Pas notifié au système.');
define('MSG_UPDATE_ERROR_POST',					'Pas de données POST.');
define('MSG_UPDATE_SUCCESS',					'Les modifications ont été apportées avec succès.');
define('MSG_DELETE_SUCCESS',					'Suppression effectuée avec succès.');
define('MSG_DELETE_MISSING',					'Essayer de supprimer un objet inexistant.');
define('MSG_SEO_DUPLICATED',					'Cette URL de SEO est déjà utilisée. Merci d\'en choisir une autre.');

/*
|--------------------------------------------------------------------------
| Email section
|--------------------------------------------------------------------------
|
| These constants are used when working with send mail functions
|
*/
define("MISSING_FIELDS",		"Merci de bien vouloir remplir les informations:");
define("MISSING_CIVILITE",		"Civilité");
define("MISSING_NOM",			"Nom");
define("MISSING_PRENOM",		"Prénom");
define("MISSING_VILLE",			"Ville");
define("MISSING_ADRESSE",		"Adresse");
define("MISSING_CP",			"Code postal");
define("MISSING_RAISON",		"Raison sociale");
define("MISSING_SERVICE",		"Service");
define("MISSING_PHONE",			"Téléphone");
define("MISSING_EMAIL",			"Email");
define("INVALID_EMAIL",			"Valide email");
define("INVALID_PHONE",			"Numéro de téléphone valide. ( ex.: 0123456789 )");
define("MISSING_SUBJECT",		"Sujet");
define("MISSING_MESSAGE",		"Message");
define("MISSING_CAPTCHA",		"Code de sécurité");
define("MISSING_VEHICULE",		"Véhicule");
define("MISSING_MARQUE",		"Marque");
define("MISSING_MODELE",		"Modèle");
define("MISSING_IMMATRICULATION","Immatriculation");
define("MISSING_CHASSIS",		"N° châssis");
define("MISSING_KILOMETRAGE",	"Kilométrage");
define("MISSING_DATEMEC",		"Date mise en circulation");
define("MISSING_INTERVENTION",	"Type d'intervention");
define('MISSING_MAIL_TO',						'Courrier du destinataire manquant.'); //missing recipient
define('MISSING_MASSAGE',						'Message manquant.');
define('MISSING_ATTACHMENT',					'Fichier de pièce manquante.');

define('INVALID_MAIL_TO',						'Le courriel du destinataire est incorrect.');

define('MAIL_SEND_SUCCESS',						'L\'e-mail a été envoyé avec succès!');


/*
|--------------------------------------------------------------------------
| Session timeout and cookie settings
|--------------------------------------------------------------------------
|
| These constants are used when working with sessions and cookies
|
*/
define('TIMEOUT_UTILISATEUR',					3600);
define('TIMEOUT_CONCESSIONAIRE',				3600);
define('TIMEOUT_MANAGER',						36000);
define('TIMEOUT_USER',							36000);
define('COOKIE_EXPIRE',							60*60*24*100);
define('COOKIE_PATH',							'/');

/* End of file constants.php */
/* Location: ./application/config/constants.php */