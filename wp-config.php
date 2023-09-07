<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         '^*nou:5cpCEN5*?ku?av*o$ Es>qm{+ 4/Vz.A3xEqJ:^24@yGl5g,MQ g;)]hPB' );
define( 'SECURE_AUTH_KEY',  '9(OB-]/n.W>~`:#MjPK+IA%d%2qF)4Fr|ZYF}?pAK`#vNSbM&eg`}Vuj1r_E}*PW' );
define( 'LOGGED_IN_KEY',    '<mDgq.hHB:.H]ecyf8k_LrR+=h`zlxROlm&tbWnB8r]=fXXmdRmat^rs)pFqx4!/' );
define( 'NONCE_KEY',        'qJS_VsQC0PP;T}{N>r@s^!pJ|gPn64c4q#1M*QC_aJ$rhpla+bVC(G{}m6 &~.-+' );
define( 'AUTH_SALT',        'qGP!6slP}z |n>^&D35I1#GEK6@z[w190*1D=y0[Hd[[IEZf-/4Uk]d=Mv>mE D(' );
define( 'SECURE_AUTH_SALT', 'nZO=GTBjjJbOqR/m6}69XS%%U#.gEM~;r[DZ=_)gZR>SBB_+KG&iL;3|:`sES_ l' );
define( 'LOGGED_IN_SALT',   'u0{,}M%9_|qAmy6n_guVmICYtXy>2f5X4?nJeC-JHRy$#QZH6@#!7yiLGLf~Qmk)' );
define( 'NONCE_SALT',       '5oSuXQBy[n0:28:_OtjQ <f)y?(KOu1`W-Aq6Ze6B}9V=ndP ,~&.KkFs_bY)HIL' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
