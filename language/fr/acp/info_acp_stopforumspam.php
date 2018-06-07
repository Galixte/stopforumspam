<?php
/**
 *
 * Stop Forum Spam. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017 Rich McGirr (RMcGirr83)
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(

	// ACP entries
	'ACP_SFS_TITLE'			=> 'Service « Stop Forum Spam »',
	'SFS_CONTROL'			=> 'Paramètres',
	// ACP message logs
	'LOG_SFS_MESSAGE'		=> '<strong>Le service « Stop Forum Spam » s’est déclenché </strong>:<br />Nom d’utilisateur : %1$s<br />Adresse IP : %2$s<br />Adresse e-mail : %3$s',
	'LOG_SFS_DOWN'			=> '<strong>Le service « Stop Forum Spam » était inaccessible durant un enregistrement ou la publication d’un nouveau message</strong>',
	'LOG_SFS_DOWN_USER_ALLOWED' => '<strong>Le service « Stop Forum Spam » était inaccessible.</strong> L’utilisateur suivant a été autorisé sur le forum :<br />Nom d’utilisateur : %1$s<br />Adresse IP : %2$s<br />Adresse e-mail : %3$s',
	'LOG_SFS_NEED_CURL'		=> 'L’extension du service « Stop Forum Spam » requiert la bibliothèque <strong>cURL</strong> pour fonctionner correctement. Merci de prendre contact avec son hébergeur pour installer et activer la bibliothèque cURL.',
	'LOG_SFS_CONFIG_SAVED'	=> '<strong>Paramètres du service « Stop Forum Spam » modifiés</strong>',
	'LOG_SFS_REPORTED'		=> '<strong>Nom d’utilisateur rapporté au service « Stop Forum Spam »</strong><br>» %1$s',
	'LOG_SFS_REPORTED_CLEARED'	=> 'Purge effectuée des messages rapportés au service « Stop Forum Spam »',
));
