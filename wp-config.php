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
define('DB_NAME', 'dallia');

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
define('AUTH_KEY',         'LLC<jpjyQZVBEz6XrJt-c>]SPTCK0:!Q{gkjOeb#00U`ekM%[D*zl@pbO0RTm[sV');
define('SECURE_AUTH_KEY',  '$H&`XJgm8Js+MxMAmvVh>Z KJb[bDi _3}9;iJ1-JV:&;x?YhOPCEQ 5f}Pig|,a');
define('LOGGED_IN_KEY',    'M AO9tt_m&_?VkeA8f0P,[m*QaY:;@xT/(6Zi2E$gHYMoee,G+Eu]T0n&rYoqWg~');
define('NONCE_KEY',        '4w<w#|5|3|/`Acw~d%-8_k>qK}I~YEk^O68St49a)E-0)g]?8=ZC*+W>B,0k766}');
define('AUTH_SALT',        'S8T)hMgSY*>j:va;CMl+pZ_31B{jz+<IH}bm:=KL?JkB;*[Ti#08R?UDBt_nDc3N');
define('SECURE_AUTH_SALT', 'Db]lS,|H,v<] #nh,S,Qbo_:o.zs$;3%)QE7/(?==KWg9&Y<:W peF|W0|,Iw(JR');
define('LOGGED_IN_SALT',   '5agt5%4+0`423-{GNshm4-IMZDJIG*QQ/5n&4P=%7WVcco)+_6Ng-y%T u-CW~f|');
define('NONCE_SALT',       'Yl*-rOmiHv+}5n;;i2#)84:Y~{s|/|X!B/F3P|=Z+XamuxQ${;c-|Xj.^Z{-Q%y#');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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
