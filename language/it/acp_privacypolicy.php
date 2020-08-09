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
	'ALL'									=> 'Tutte le pagine',

	'CLICK_TO_SELECT'						=> 'Fare clic nella casella per selezionare un colore',

	'COOKIE_BLOCK_LINKS'					=> 'Blocca tutti i collegamenti',
	'COOKIE_BLOCK_LINKS_EXPLAIN'			=> 'Impedire a un utente di accedere a qualsiasi collegamento sulla scheda fino a quando non ha accettato la Cookie Policy.',
	'COOKIE_BOX_BDR_COLOUR'					=> 'Colore Cookie box border',
	'COOKIE_BOX_BDR_COLOUR_EXPLAIN'			=> 'Seleziona il colore del banner accettazione Cookie.<br>Il colore predefinito è <strong>“#0E9BE1”</strong>',
	'COOKIE_BOX_BDR_WIDTH'					=> 'Larghezza bordo banner Cookie',
	'COOKIE_BOX_BDR_WIDTH_EXPLAIN'			=> 'Imposta la larghezza del bordo del banner dei Cookies<br>Il valore predefinito è <strong>“0”</strong>',
	'COOKIE_BOX_BG_COLOUR'					=> 'Colore sfondo Banner Cookie',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'			=> 'Seleziona il colore di sfondo per il banner di accettazione dei cookie.<br>Il colore predefinito è <strong>“#00608F”</strong>',
	'COOKIE_BOX_HREF_COLOUR'				=> 'Colore link banner cookie',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'		=> 'Seleziona il colore del link di accettazione per il banner dei cookie.<br>Il colore predefinito è <strong>“#FFFFFF”</strong>',
	'COOKIE_BOX_TXT_COLOUR'					=> 'Colore del testo nel banner dei cookie',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'			=> 'Select the text colour for the Cookie acceptance box.<br>Il colore predefinito è <strong>“#DBDB00”</strong>',

	'COOKIE_CUSTOM_PAGE'					=> 'Usa i colori personalizzati della pagina delle Policy',
	'COOKIE_CUSTOM_PAGE_CORNERS'			=> 'Usa bordi rotondi',
	'COOKIE_CUSTOM_PAGE_CORNERS_EXPLAIN'	=> 'Usa bordi rotondi per la pagina delle Policy.<br>Impostandolo su <strong>No</strong> significherà che la pagina avrà gli angoli squadrati.',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'			=> 'Utilizza i colori personalizzati per la pagina delle Policy.<br>Impostandolo su <strong>No</strong> utilizzerà i colori predefiniti del tuo stile.',
	'COOKIE_CUSTOM_PAGE_RADIUS'				=> 'Raggio pagina personalizzato',
	'COOKIE_CUSTOM_PAGE_RADIUS_EXPLAIN'		=> 'Imposta il numero di pixel per l\'arrotondamento degli angoli della pagina delle Policy personalizzate. Impostandolo a 0 significherà che la pagina avrà angoli squadrati.<br><em>Il valore predefinito per il tema prosilver è 7px.</em>',

	'COOKIE_EXPIRE'							=> 'Scadenza Cookie',
	'COOKIE_EXPIRE_EXPLAIN'					=> 'L\'impostazione di questo su SI richiederà all\'utente di accettare di nuovo la Politica sui cookie ogni anno.',

	'COOKIE_PAGE_BG_COLOUR'					=> 'Colore di sfondo della pagina delle Policy personalizzate',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'			=> 'Seleziona il colore di sfondo per la pagina delle Policy.',
	'COOKIE_PAGE_TXT_COLOUR'				=> 'Colore personalizzato per il testtesto della pagina delle Policy.',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'		=> 'Seleziona il colore del testo per la pagina delle Policy.',

	'COOKIE_POLICY_ENABLE'					=> 'Abilita la Cookie policy',
	'COOKIE_POLICY_ENABLE_EXPLAIN'			=> 'Abilita / Disabilita la richiesta per l\'utente di accettare l\'uso dei cookie, ai sensi della direttiva sui cookie dell\'UE (2012), su questa Forum.',
	'COOKIE_POLICY_EXPLAIN'					=> 'Qui puoi impostare le opzioni per gestire le politiche sulla privacy e sui cookie.',
	'COOKIE_POLICY_ON_INDEX'				=> 'Mostra solo sull\'indice',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'		=> 'Mostra la casella di accettazione della cookie policy solo nella pagina indice o in tutte le pagine.',
	'COOKIE_POLICY_OPTIONS'					=> 'Opzioni della politica sui cookie',

	'COOKIE_REQUIRE'						=> 'Richiedi l\'accettazione dei cookie',
	'COOKIE_REQUIRE_EXPLAIN'				=> 'Richiedi l\'accettazione dei cookie del forum prima che un membro possa registrarsi o accedere.<br>L\'impostazione su "Sì" consentirà comunque a un utente di visualizzare la bacheca (soggetto alle autorizzazioni).',

	'COOKIE_SHOW_POLICY'					=> 'Mostra privacy / cookie policy',
	'COOKIE_SHOW_POLICY_EXPLAIN'			=> 'Impostando questo su sì verrà visualizzato il collegamento della barra di navigazione alla politica sulla privacy / cookie quando la politica sui cookie è disabilitata, ovvero è possibile avere una politica sulla privacy / sui cookie senza la necessità di avere la casella di accettazione.',

	'CUSTOM_BOX_OPTIONS'					=> 'Opzioni della casella dei cookie',
	'CUSTOM_BOX_OPTIONS_EXPLAIN'			=> '<strong>Qui puoi modificare le opzioni in base al tuo stile per la casella di accettazione dei cookie.</strong>',
	'COOKIE_BOX_TOP'						=> 'Cookie box top [NON USARE]',
	'COOKIE_BOX_TOP_EXPLAIN'				=> 'Set here how far from the top of the window that you want the cookie acceptance box to be placed.<br><strong>Note 1:</strong> If the window is less than the value set here the cookie box will appear at the bottom of the window.<br><strong>Note 2:</strong> Setting the value to <strong>“0”</strong> will place the box at the top of the window.<br><strong>Note 3:</strong> Setting the value to <strong>“9999”</strong> will place the box at the bottom of the window.',
	'CUSTOM_PAGE_COLOURS'					=> 'Opzioni personalizzate della pagina delle Policy',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'			=> '<strong>Qui puoi modificare i colori e / o impostare gli angoli arrotondati in base al tuo stile per la pagina delle norme.</strong>',

	'PIXELS'								=> 'px',
	'POLICIES'								=> 'Policies',
	'PRIVACY_POLICY_ANONYMISE'				=> 'Anonimizza gli indirizzi IP',
	'PRIVACY_POLICY_ANONYMISE_EXPLAIN'		=> 'Rendiamo anonimo l\'indirizzo IP dell\'utente su Post, Sondaggi e PM<br><em>L\'indirizzo IP reale dell\'utente verrà comunque utilizzato nelle aree della board dove è richiesto per la corretta gestione della board.</em>',
	'PRIVACY_POLICY_ANONYMISE_IP'			=> 'Anonimizza l\'indirizzo IP',
	'PRIVACY_POLICY_ANONYMISE_IP_EXPLAIN'	=> 'L\'indirizzo IP & nbsp; da utilizzare per l\'anonimizzazione.<br><strong>Deve essere un indirizzo IP valido</strong>',
	'PRIVACY_POLICY_ENABLE'					=> 'Abilita la Privacy policy',
	'PRIVACY_POLICY_ENABLE_EXPLAIN'			=> 'Enable/disable all user’s requirement to accept the GDPR (2018) on this board.',
	'PRIVACY_POLICY_FORCE'					=> 'Forza l\'accettazione della privacy',
	'PRIVACY_POLICY_FORCE_EXPLAIN'			=> 'Forza tutti gli utenti di questa bacheca ad accettare il GDPR.',
	'PRIVACY_POLICY_HIDE_CORE'				=> 'Nascondi i collegamenti alla privacy principali di phpBB',
	'PRIVACY_POLICY_HIDE_CORE_EXPLAIN'		=> 'Rimuovere i collegamenti alla privacy e ai termini predefiniti di phpBB core.<br><strong>Nota:</strong>Ciò è rilevante solo nelle versioni di phpBB 3.2.3 o successive.',
	'PRIVACY_POLICY_LIST_LINES'				=> 'Linee per le policy inerenti la Privacy',
	'PRIVACY_POLICY_LIST_LINES_EXPLAIN'		=> 'Il numero di righe da visualizzare nella <em>lista delle Policy Privacy</em>.',
	'PRIVACY_POLICY_OPTIONS'				=> 'Opzioni relative alla politica sulla privacy',
	'PRIVACY_POLICY_REMOVE'					=> 'Visualizza rimuovi link',
	'PRIVACY_POLICY_REMOVE_EXPLAIN'			=> 'Visualizza nella scheda "Dati sulla privacy" nell\'UCP dell\'utente il link mailto per richiedere la rimozione del proprio account.',
	'PRIVACY_POLICY_RESET'					=> 'Reimposta l\'accettazione della politica',
	'PRIVACY_POLICY_RESET_EXPLAIN'			=> 'Reimposta l\'accettazione della politica in modo che i membri dovranno accettare nuovamente la politica sulla privacy.<br>Una volta eseguito, sarà necessario impostare “<strong>Forza l\'accettazione della privacy</strong>” su “<strong>SI</strong>”.',
));
