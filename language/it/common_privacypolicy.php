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
	'ACCEPT_DATE'		=> 'Data di accettazione della Policy',

	'BIRTHDAY'			=> 'Compleanno',
	'IP_ANONYMISED'		=> 'I tuoi indirizzi IP sono stati resi anonimi',

	'NO_BIRTHDAY'		=> 'Nessuna data di nascita inserita',
	'NO_DATA_ENTERED'	=> 'Nessun dato è stato inserito',
	'NOT_ACCEPTED'		=> 'Policy non accettata',

	'REG_DATE'			=> 'Data di registrazione',
	'REG_IP'			=> 'IP di registrazione',

	'USERNAME'			=> 'Nome utente',
	'USER_IPS'			=> 'Indirizzo IP usato',

	'VERSION'			=> 'Versione',
));
