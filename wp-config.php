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
define( 'DB_NAME', 'xavier' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '|_?%5>/k2&~q(z<|dy8}~?z}3st+@BhYd@SSlDQZ^M1p[mKp$4.+M:a#Vu5aJYDl' );
define( 'SECURE_AUTH_KEY',  'xeK1k08SISS^mQ|K`gmIhJ0p)f*&lq]x/R`HXe(l9a-^QT0+c+T;K+v[FsBIjy|Z' );
define( 'LOGGED_IN_KEY',    'd^ Rb fNBX-|K!At3c&+vQ+SEY@9KJp<T(6VBFBoX#d5/S:P<X1t5e)shBHRi*fq' );
define( 'NONCE_KEY',        'd{*[Yn(%xeO%36t;oS]F7ss$r2WZ%YR28qd}:|-%Zv1ro5+s^9C]h}5o^h L3(<+' );
define( 'AUTH_SALT',        '2HWA0gG so_U5imx0Iq$JX!@M?:L(]:6FcMKrw#2_eF0s@NZ!Yiropgl3~U60l9=' );
define( 'SECURE_AUTH_SALT', 'sRsjR-7!PJuT`.8*h^MmL%]3k~xhXEZn`{<<#%^{Hg~}]s0oHPts|~kpNl) P%9>' );
define( 'LOGGED_IN_SALT',   'v78re.a_fM d8*0w^A2Jo9P}.}3&dY,(U{*r_Eg81KjS-b;5[Mz%u;]v@4mW=qN8' );
define( 'NONCE_SALT',       '5<&2)(x)uUN:<I3/*#-=BtR;WaP-rD}WQ/Xj![4KBa:+.S%x}3lwH7_/;Dy8hxxO' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
