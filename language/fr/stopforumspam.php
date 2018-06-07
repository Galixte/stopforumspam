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
	'NO_POST_SELECTED'	=> 'Il est nécessaire de sélectionner au moins un message pour You must select at least one post pour effectuer cette action.',
	'NO_SOUP_FOR_YOU'	=> 'Accès refusé ! Il semble que vous avez été considéré comme un spammeur.<br />Si vous pensez être dans votre bon droit et que tout ceci est une erreur, merci de contacter %sl’équipe du forum%s.',
	'NO_SOUP_FOR_YOU_NO_CONTACT'	=> 'Accès refusé ! Il semble que vous avez été considéré comme un spammeur.',
	'SFS_IP_STOPPED'	=> '<a target="_new" title="Vérifier l’adresse IP sur le site Web StopForumSpam.com (s’ouvre dans un nouvelle fenêtre)" href="http://www.stopforumspam.com/ipcheck/%1$s">%1$s</a>',
	'SFS_USERNAME_STOPPED'	=> '<a target="_new" title="Vérifier le nom d’utilisateur sur le site Web StopForumSpam.com (s’ouvre dans un nouvelle fenêtre)" href="http://www.stopforumspam.com/search/?q=%1$s">%1$s</a>',
	'SFS_EMAIL_STOPPED'	=> '<a target="_new" title="Vérifier l’adresse e-mail sur le site Web StopForumSpam.com (s’ouvre dans un nouvelle fenêtre)" href="http://www.stopforumspam.com/search/?q=%1$s">%1$s</a>',
	'SFS_ERROR_MESSAGE'	=> ' Actuellement il n’est pas possible de traiter votre demande en raison d’un problème lié à une partie externe au forum. Merci de réessayer ultérieurement.',
	'SFS_POSTING'	=> 'Aucune adresse e-mail en essayant de publier un message.',
	'SFS_BANNED'	=> 'Trouvé(e) dans la base de données du service « Stop Forum Spam ».',
	'SFS_REPORTED'	=> 'Ce message a déjà été rapporté',
	'REPORT_TO_SFS'	=> 'Rapporter au service « Stop Forum Spam »',
	'SFS_SUCCESS_MESSAGE'	=> 'Nom d’utilisateur rapporté avec succès à la base de données du service « Stop Forum Spam »',
	'SFS_WAS_REPORTED'	=> 'Ce message a été rapporté au service « Stop Forum Spam »',
	'SFS_NEED_CURL'	=> 'L’extension requiert l’outil cURL pour fonctionner lequel ne semble pas installé',
	'LOG_SFS_REPORTED' => '<strong>Nom d’utilisateur rapporté au service « Stop Forum Spam »</strong><br>» %1$s',
));
