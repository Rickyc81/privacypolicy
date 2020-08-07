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
	'DONATE'					=> 'Donazione',
	'DONATE_EXTENSIONS'			=> 'Donazione alla mia estensione',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Questa estensione, come tutte le mie estensioni, è totalmente gratuita. Se hai tratto vantaggio dall\'utilizzo, valuta la possibilità di effettuare una donazione facendo clic sul pulsante di donazione PayPal qui a fianco: lo apprezzerei. Prometto che non ci saranno spam né richieste di ulteriori donazioni, anche se sarebbero sempre ben accette.',

	'NEW_VERSION'				=> 'Nuova versione - %s',
	'NEW_VERSION_EXPLAIN'		=> 'La Versione %1$s di questa entensione è disponibile per il download.<br>%2$s',
	'NEW_VERSION_LINK'			=> 'Download',
	'NO_VERSION_EXPLAIN'		=> 'Le informazioni sull\'aggiornamento della versione non sono disponibili.',

	'PAYPAL_BUTTON'				=> 'Dona cliccando sul tasto Paypal',
	'PAYPAL_TITLE'				=> 'PayPal: il modo più sicuro e semplice per pagare online',

	'VERSION'					=> 'Versione',
));
