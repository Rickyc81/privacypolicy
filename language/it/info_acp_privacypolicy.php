<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
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

/// DEVELOPERS PLEASE NOTE
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_USER_UTILS'				=> 'Utilità utente',
	'AUTOGROUPS_TYPE_PPACCPT'		=> 'Privacy Policy Accettata',

	'COOKIE_POLICY'					=> 'Privacy & Cookie policies',

	'POLICY_RESET_LOG'				=> '<strong>Reimpostazione dell\'accettazione della politica sulla privacy per tutti gli utenti</strong>',
	'POLICY_USER_ACCEPT_LOG'		=> '<strong>Accettazione della politica sulla privacy impostata per l\'utente</strong><br>»» %1$s',
	'POLICY_USER_UNSET_LOG'			=> '<strong>Accettazione della politica sulla privacy non impostata per l\'utente</strong><br>»» %1$s',
	'PRIVACY_DATA'					=> 'Dati sulla privacy',
	'PRIVACY_LIST'					=> 'Elenco privacy',
	'PRIVACY_POLICY'				=> 'Privacy policy',
	'PRIVACY_POLICY_ADD_LOG'		=> '<strong>Privacy policy aggiunta</strong><br>»» %1$s',
	'PRIVACY_POLICY_EDIT'			=> 'Policy files editor',
	'PRIVACY_POLICY_EDIT_LOG'		=> '<strong>Privacy policy modificata</strong><br>»» %1$s',
	'PRIVACY_POLICY_LOG'			=> '<strong>Impostazioni della privacy policy aggiornate</strong>',
	'PRIVACY_POLICY_MANAGE'			=> 'Settaggi Privacy policy',

	'TAPATALK_INSTALLED'			=> 'Tapatalk rilevato',
	'TAPATALK_INSTALLED_EXPLAIN'	=> 'L\'estensione Tapatalk è stata rilevata come installata su questa scheda che non è compatibile con l\'estensione della Privacy Policy.<br><br>Ciò significa che qualsiasi utente Tapatalk che accede a questa bacheca non sarà soggetto ai requisiti dell\'Informativa sulla privacy.',
));
