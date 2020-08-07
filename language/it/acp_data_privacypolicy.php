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
	'ACCEPT_ME'						=> 'Accetta l\'informativa sulla privacy per l\'utente',
	'ACCEPT_REMOVE'					=> 'Rimuovi accettazione per l\'utente',
	'ACP_PRIVACY_POLICY_EXPLAIN'	=> 'Qui puoi selezionare e visualizzare i dati sulla privacy di un utente',
	'ACP_PRIVACY_TITLE'				=> 'Dati sulla privacy',

	'DETAILS_FOR'					=> 'Dettagli sulla privacy per : %1$s',

	'INVALID_USERNAME'				=> 'L\'Username inserita non valida',

	'NO_IPS_FOUND'					=> 'Nessun IP trovato',
	'NO_USERNAME'					=> 'Nessun nome utente inserito',

	'POLICY_ACCEPTANCE_SET'			=> 'Accettazione della Privacy Policy impostata per %1$s',
	'POLICY_ACCEPTANCE_UNSET'		=> 'Accettazione della Privacy Policy non impostata per %1$s',

	'SELECT_USERNAME_EXPLAIN'		=> 'L\'utente di cui desideri esaminare i dati sulla privacy.',
	'SELECT_USERNAME'				=> 'Seleziona nome utente',
));
