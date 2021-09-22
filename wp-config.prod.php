<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_wordpress-local' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NTr4tuE|f9N|5HVf2pMHa@.4*0ou*uQz8uS }]`D8kgo0 #-Gt@q@J9X$*Zqc2lk' );
define( 'SECURE_AUTH_KEY',  '%T]en<{:EuY:Gh~oyCY2_7py=J/#W}(M^rzJS9Td*0*C{k^#i-2@]%YEm)O1ub}<' );
define( 'LOGGED_IN_KEY',    '4<Ent{j&qrlLC|l-|fvea5q+ PV-4p7<|<DCOS534g0kqd7D7:X3CFO#P9_{HU3a' );
define( 'NONCE_KEY',        '#III`WZkNHKCE9K]G]-x:Du%dk3n5p9c9){n`r]N#=y)$vZ|SGX~+H=$E]^,0kk4' );
define( 'AUTH_SALT',        'fy|>Yo1G7j2y8FHN9ID:S/R!ntdFftalHlnL|k{!(h^ZCXY<L767Z&p;bq&]~phg' );
define( 'SECURE_AUTH_SALT', 'J$ufD;klRs}]43u0}QDw*Fyf<#2:YE(jA>OQ^8D~pmV}T%ftEwrV!+m8ADxb<Y7Y' );
define( 'LOGGED_IN_SALT',   '.s[r|i|x]{rphFTw*c]$IT)KukwbGl9lA739YrS3W 7Xj7=/]Ev`kv@I[N#EdNPe' );
define( 'NONCE_SALT',       'Ciua*6NL/H@+kN~:q 1A&XI@A9)-<DRAaTjC9N:_LT88%QBkvC9+,*mv7p)m&N$1' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
