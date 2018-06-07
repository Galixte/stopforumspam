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
	'SFS_SETTINGS'			=> 'Paramètres',
	'SFS_ENABLED'			=> 'Activer le service « Stop Forum Spam »',
	'SFS_ENABLED_EXPLAIN'	=> 'Permet d’activer ou de désactiver l’extension. S’applique autant aux invités qu’aux utilisateurs enregistrés.',
	'SFS_THRESHOLD_SCORE'	=> 'Seuil du service « Stop Forum Spam »',
	'SFS_THRESHOLD_SCORE_EXPLAIN'	=> 'Permet à l’extension de vérifier selon un seuil (comme le nombre de fois qu’un nom d’utilisateur, une adresse e-mail ou une adresse IP ont été trouvés dans la base de données du service « Stop Forum Spam »). Saisir une valeur comprise entre 1 et 99. Plus la valeur est petite, plus grandes sont les chances d’avoir un faux positif.',
	'SFS_LOG_MESSAGE'		=> 'Archiver les actions',
	'SFS_LOG_MESSAGE_EXPLAIN'	=> 'Permet d’archiver les actions effectuées dans les journaux d’administration et d’utilisateur.',
	'SFS_BAN_IP'			=> 'Bannir l’adresse IP',
	'SFS_BAN_IP_EXPLAIN'	=> 'Permet de bannir l’adresse IP de l’utilisateur selon la durée définie par le paramètre « Durée du bannissement ».',
	'SFS_BAN_REASON'		=> 'Afficher la raison du bannissement',
	'SFS_BAN_REASON_EXPLAIN'	=> 'Permet d’afficher ou non un message à l’utilisateur banni si l’option : « Bannir l’adresse IP » est activée.',
	'SFS_DOWN'				=> 'Autoriser si le service « Stop Forum Spam » est inaccessible',
	'SFS_DOWN_EXPLAIN'		=> 'Autorise les enregistrements et la publication de nouveaux messages si le service « Stop Forum Spam » est inaccessible.',
	'SFS_API_KEY'			=> 'Clé de l’API du service « Stop Forum Spam »',
	'SFS_API_KEY_EXPLAIN'	=> 'Permet de soumettre les spammeurs à la base de données du service « Stop Forum Spam ». Pour utiliser cette fonctionnalité il est nécessaire de saisir une clé de l’API du service « <a target="_new" href="http://www.stopforumspam.com/keys">Stop Forum Spam</a> ». Pour obtenir une clé de l’API auprès de ce service, un compte doit avoir été enregistré au préalable sur le site Web de « Stop Forum Spam ».',
	'SFS_NOTIFY'			=> 'Notification du forum',
	'SFS_NOTIFY_EXPLAIN'	=> 'Permet de d’activer les notifications sur le forum lorsqu’un message sera rapporté au service « Stop Forum Spam ». La clé de l’API du service « Stop Forum Spam » doit être saisie dans l’option au-dessus.',
	'SFS_CLEAR'	=> 'Réinitialiser les messages rapportés',
	'SFS_CLEAR_EXPLAIN'	=> 'Permet de purger tous les messages rapportés au service « Stop Forum Spam ».',
	// ACP messages
	'SFS_BY_NAME'	=> 'Vérifier le nom d’utilisateur',
	'SFS_BY_EMAIL'	=> 'Vérifier l’adresse e-mail',
	'SFS_BY_IP'		=> 'Vérifier l’adresse IP',
	'TOO_SMALL_SFS_THRESHOLD'	=> 'La valeur du seuil est trop petite.',
	'TOO_LARGE_SFS_THRESHOLD'	=> 'La valeur du seuil est trop grande.',
	'SFS_SETTINGS_ERROR'		=> 'Une erreur s’est produite durant la sauvegarde des paramètres. Merci de soumettre votre rapport d’erreur à l’auteur de l’extension.',
	'SFS_SETTINGS_SUCCESS'		=> 'Les paramètres ont été sauvegardés avec succès.',
	'SFS_REPORTED_CLEARED' => 'Les messages rapportés au service « Stop Forum Spam » ont été purgés.',
));
