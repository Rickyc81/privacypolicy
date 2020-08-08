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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACCEPT' 				=> 'Accetto queste Policies',

	'COOKIE_ACCEPT_TEXT'	=> 'Questo Forum utilizza i cookie per darti la migliore e più pertinente esperienza. Per poter utilizzare questo Forum devi accettare queste Policies.<br>Puoi saperne di più sui cookie utilizzati in questo forum facendo clic sul collegamento "Policies" in fondo alla pagina.<br>',
	'COOKIE_ACCEPT'			=> 'Accetta',
	'COOKIE_ACCESS'			=> 'Accesso ai cookies',

	'COOKIE_BLOCK'			=> 'Non puoi accedere ai link su questo forum fino a quando non hai accettato la Cookie Policy.',

	'COOKIE_POLICY'			=> 'Cookie Policy',
	'COOKIE_PRIV_POLICY'	=> 'Policies',

	'COOKIE_REQUIRE_ACCESS'	=> '<h3>Accettazione cookie richiesta</h3>
	<p>Devi accettare la Politica sui cookie di %1$s prima di poterti registrare su questo sito , se sei già registrato, prima di poter accedere al sito.</p>',

	'DECLINE' 				=> 'Non accetto questa politica',

	'HR_BBCODE_HELPLINE' 	=> 'Inserisci una riga orizzontale',

	'POLICY_ACCEPT' 		=> 'Accetta la Policy della Privacy',
	'POLICY_EXPLAIN'		=> 'Visualizza le Policy sulla privacy e sui cookie per questo Forum',
));
