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
	'COOKIE_EDIT_EXPLAIN'				=> 'Qui puoi personalizzare la gestione dei Cookie del forum.',
	'COOKIE_EDIT_EXPLAIN_NEW'			=> 'Qui puoi aggiungere una nuova Cookie Policy in %1$s.<br>La Cookie Policy viene visualizzata quando la Cookie Policy è abilitata e un utente fa clic sul collegamento "Politiche" nella barra di navigazione in basso.',

	'POLICY_DESCRIPTION'				=> 'Nome file Policy',
	'POLICY_DESCRIPTION_EXPLAIN'		=> 'Il nome visualizzato di questo file di criteri che dovrebbe essere tradotto in <strong>%1$s</strong>.',
	'POLICY_EDIT'						=> 'Editor dei file delle Policy',
	'POLICY_EDIT_EXPLAIN'				=> 'Qui è possibile selezionare i file di testo della politica che si desidera modificare o creare un nuovo file di testo della politica in una lingua specificata.',
	'POLICY_FILE_OPTIONS'	   			=> 'Opzioni del file delle Policy',
	'POLICY_SELECT_FILE'		   		=> 'Seleziona File',
	'POLICY_SELECT_LANGUAGE'			=> 'Seleziona lingua',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN'		=> 'Qui puoi personalizzare la politica di accettazione della privacy del Forum.',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN_NEW'	=> 'Qui puoi aggiungere una nuova Policy di accettazione della privacy in <strong>%1$s</strong>.<br>La Policy di accettazione della privacy viene visualizzata dopo la Policy sulla privacy.',
	'PRIVACY_EDIT_CREATED'				=> 'Nuova Policy creata »» %1$s',
	'PRIVACY_EDIT_EXPLAIN'				=> 'Qui puoi personalizzare la politica sulla privacy del Forum.',
	'PRIVACY_EDIT_EXPLAIN_NEW'			=> 'Qui puoi aggiungere una nuova Informativa sulla privacy in %1$s.<br>La politica sulla privacy è la politica principale che descrive le regole sulla privacy di questo Forum.',
	'PRIVACY_EDIT_UPDATED'				=> 'Informativa sulla privacy aggiornata »» %1$s',

	'TERM_OF_USE_EDIT_EXPLAIN'			=> 'Qui puoi personalizzare la Policy aggiuntiva sui Termini d\'uso del Forum.',
	'TERM_OF_USE_EDIT_EXPLAIN_NEW'		=> 'Qui puoi aggiungere una nuova Policy aggiuntiva sui Termini di utilizzo in %1$s.<br>Questo viene visualizzato dopo le principali Condizioni d\'uso quando un nuovo utente desidera registrarsi al Forum.',

	'SITENAME'							=> 'Nome sito',
	'SITENAME_HELP'						=> 'Inserisci il segnaposto del nome sito (%sitename%)',

	'VERSION'				   			=> 'Versione',
));
