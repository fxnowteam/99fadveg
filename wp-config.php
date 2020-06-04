<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', '' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', '' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', '' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M3#7)/[B&eN0bin52H$s >9dv9h-KIT),F^=8X*kxvbW%VZ|@RlCC.tPFj1Pv2[0' );
define( 'SECURE_AUTH_KEY',  'Y{D3BN3TWe4a{c^Ww7e;P6^y/;[dN(sO&-OIuZ~L)v#33B2+~tj+##=@E6SGXp=Y' );
define( 'LOGGED_IN_KEY',    '=ds$X-sGiWS-^J=:DgDt<hFR@,t5q$d)?G[_f}zpM-YKnapwX*|y)i?p{[&wG)m@' );
define( 'NONCE_KEY',        'lB1Ddv{yfB{e(U^et9?*w?|]tjB=zv<A}~tSCbI%~>g2Nd`[%s+d^yVYw1 +(!#j' );
define( 'AUTH_SALT',        'z%PrFV>`$GU.G]3DQ+bP7~t^HGH8P:X})l9eZU#(~.<DZgeK+TtL55BcDp>3BUO?' );
define( 'SECURE_AUTH_SALT', 'T]fgQQ; =sJm!KnfpvAZ)/mm.ivptk)s~HLyTummpdPY@t,6F>&xn(Vb7<6HX6>q' );
define( 'LOGGED_IN_SALT',   'Ptc[0|T2vhOwx4txwrPMu- k@!]H8DCINb8p&p]e/O+!c^$Q58+~)8scey:.=~)m' );
define( 'NONCE_SALT',       ')?[&)GJWV?DPp)B12=E%_)oFp%4{vZFEL8Fv#kn_ok|G4l+>N.A !*r~l2|&s[Oj' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = '';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');
