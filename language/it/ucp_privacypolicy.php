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
	'CSV_DOWNLOAD'					=> 'Scarica il file in CSV dei tuoi dati',

	'REMOVE_ACCOUNT'				=> 'Fare clic su questo collegamento per inviare un\'e-mail all\'amministratore del forum con la richiesta di rimozione del proprio account',
	'REMOVE_MY_ACCOUNT'				=> 'Per favore rimuovi il mio account',
	'REMOVE_MY_ACCOUNT_BODY'		=> 'Non desidero più essere un membro di questo Forum e richiedo che i miei dati vengano rimossi in conformità con il regolamento GDPR (2018).%1$sIl mio nome utente è %2$s%1$s%1$sIl motivo per cui desidero essere rimosso è [inserisci il motivo. Se non viene inserito alcun motivo, i tuoi dati non verranno rimossi.]',

	'UCP_PRIVACY_POLICY_EXPLAIN'	=> 'Di seguito troverai i dettagli dei tuoi dati personali che memorizziamo su questo sito.',
	'UCP_PRIVACY_TITLE'				=> 'Dati sulla privacy',
));
