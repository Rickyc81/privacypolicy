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
	'ACCEPT_DATE'			=> 'Data di accettazione',
	'ALL'					=> 'Tutte',

	'CLEAR_FILTER'			=> 'Cancella filtro.',

	'FILTER_BY'				=> 'Filtra per',

	'GO'					=> 'Vai',

	'HASH'					=> '#',

	'LAST_VISIT'			=> 'Ultima visita',

	'NO_VISIT'				=> 'Utente mai visitato',
	'NOT_ACCEPTED'			=> 'Non accettato',

	'OTHER'					=> 'Altro',

	'PAGE_NUMBER'			=> 'Pagina',
	'PRIVACY_LIST_EXPLAIN'	=> 'Di seguito è riportato un elenco di tutti i membri del Forum e la data in cui hanno accettato l\'informativa sulla privacy di questo Forum.',

	'REG_DATE'				=> 'Data di registrazione.',

	'SORT_BY'				=> 'Ordinato per',

	'TOTAL_USERS'			=> 'Totale',

	'USER_ID'				=> 'User ID',
	'USERNAME'				=> 'Nome utente',

	'VERSION'				=> 'Versione',

	// Translators - set these to whatever is most appropriate in your language
	// These are used to populate the filter keys
	'START_CHARACTER'	=> 'A',
	'END_CHARACTER'		=> 'Z',
));
