<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'maliseuse' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PH6oAq>Qb[GvOe?M(A+}}p><ZRQu;C_~-i Z*0vlJ v1[ta$~&-Q>4}4v@llP;ti' );
define( 'SECURE_AUTH_KEY',  'd=`bp`*2mhzzr GFfyLJZPu/yl*^L:cIoDwF{ .X6p*v0w2#V::NMJ]Jh_J1Xxoo' );
define( 'LOGGED_IN_KEY',    '~wsk97 YAVez&V}}7MB01sh .+2xu~0K^s]EPR5rZC3F>Z#Hs}Yw:r4IHK&rnnuA' );
define( 'NONCE_KEY',        'I,fS:+]RbtrI|4%mUrS38MH^Kx,!(0]6OekuFq|_P5j9oXF%_?q 5?1*ng 2;!uo' );
define( 'AUTH_SALT',        'Y{v~o-Bv2gw85sxi/,VbwI~nW{_YwmrH4}5:{>}H&ffNN]#]h:u]BnAnsga#FG@<' );
define( 'SECURE_AUTH_SALT', 'En*.9H?ZJ~&l&M`arIKD+?`o`=C4o$%3-/@7~-(:*pGmrug7oeO`{P5.acrUf;Fw' );
define( 'LOGGED_IN_SALT',   '5& (]ti,e<A}e{K1Nq4YmF4TAu}3#EN//YwwbDuvk3|iWi/_{s(=CW)7XDTs{{y ' );
define( 'NONCE_SALT',       '8#(@z?!LT1+2E$dyhZL|Ze.*rsJQH-pv<O?AIt G1;ELU9VVu=KsJqc)LLt>w=T#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
