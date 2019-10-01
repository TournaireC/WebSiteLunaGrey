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
define( 'DB_NAME', 'LunaGrey' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'HB#R,9Um[dTJAK;XTm#G`~9BJXM;tJ/Lg?z:5A~;@!j_QR!g=?!Tlh5,-/]u5D%H' );
define( 'SECURE_AUTH_KEY',  'rh<#yPyIe|9+g[:L>6>hsD3X!9HU-] CMAfyHm>)9OpQ8&m,zu}MKbgKh)FKZ0Iy' );
define( 'LOGGED_IN_KEY',    'SfuwIe~BWC+>*+NTP0U+ehX~!CJn/&Mj8%Jo6TW)(^X~*EF@a9UJlpQoI/Vg4;nK' );
define( 'NONCE_KEY',        'PUl{qRJlm39S=$TGA^^V_]Z6?000p[A=m&a$%]u7wmLUM9i~^@hYb&~%@zUVa,cH' );
define( 'AUTH_SALT',        '{BcYjD8~L[:z;kfkN**oT:d]OI-W>x[r<`K4a%IXV4QW*>mt+r{gcwp^:k{[%l70' );
define( 'SECURE_AUTH_SALT', '{PU`E;t.AMI_0`_@$nqD?#8p%`ObFX[k.l6@0/^?qr}]uHad_NU?Dp<hgcED<<0p' );
define( 'LOGGED_IN_SALT',   '6Ibm;s`f$u)K?}G`bsuo-:~8vjr|FB57VOsF*r!](gyRS>,b?mu:ic,pvKkK#!$d' );
define( 'NONCE_SALT',       '|FEoqBw`9k|t-}l*Hg@vu/xXX#qd6-!X)r`?F2&Aa/n`BQD=/VdDGTNFV2GVW1a?' );
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
