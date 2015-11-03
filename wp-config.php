<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'db_no_fluxo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T-CC35H 4NfJTuQFC{]05dCA2#e&uVw bSK,]~P|7G)|$ZGV|duMfvI*YNc[7*[F');
define('SECURE_AUTH_KEY',  'sqMekCf*X1ELxU`w|f,&6{|B[bK|jt$Ou+ <kB<av1NFa5H+@/$W82,B|vjva;Sa');
define('LOGGED_IN_KEY',    'J:.-|5(.2$x%61rE+$4-&|1TCq$,)+3D{z1l5ldLWs2PHNyTz-t)WnU@tBD2zrFv');
define('NONCE_KEY',        '*t#GS}Fk_Y)H&)d>H-F!D%2vqhI-o{fC*fLAg8<T5A|=gqccT6zev!RN`8a|,%]|');
define('AUTH_SALT',        'qk| 0JOc+ZC9Xy.h?b~^-8p$ng.yj 2a?qtoyB`]vaWJq*W`<ubZ,65k6TQZoX?6');
define('SECURE_AUTH_SALT', '(S.KX!C+-jhj]n2h+%U[m:|%&r|t&Cd7y=swD(-d||1A|5`_huf~L?!JFFRcs#2z');
define('LOGGED_IN_SALT',   ';-+d%-h?P0J2hLChg^;CmY.lD,]Fw{nE6=?aX}aT_IUSptIg7.pvfqOZMQ& JiLy');
define('NONCE_SALT',       'dGUGqeRHG;q=fgzuG7eMRJace:.XFV9fty@LjJF u7[)(cg&EV2,^%`SOB!Y:4OJ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'mmgv_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
