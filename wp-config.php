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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '280390' );

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
define( 'AUTH_KEY',         ']V5b^^ONlZr4*Uu+q~;*br]tFw5uWtzwhguZY>ogsl|S@!#Q|<We,T=!8hS`HT0?' );
define( 'SECURE_AUTH_KEY',  'Ti LO2[W~M,PPe0B}=bbS?&/r1at{_B~v~^lgJvsaxg_@UzurNhi+_u*#1a!6wE4' );
define( 'LOGGED_IN_KEY',    'r#{NEk_6(c`CsG/X2n6QI_J(;{1(0ATUe-Vpd7k`a8O4I#*:SC#Yf34g9?z[/rp>' );
define( 'NONCE_KEY',        '4rYKl6<?EVIeryJ c_Ou!:kLAUc8&)l:f`QLVnhto#*%ShdGWDzbwRanD9)3,O!1' );
define( 'AUTH_SALT',        '}3hJOw+gl)}L1yPadWgJ.H5}/JE)]lZJEl%%lmGbD?JvMNmx2:1!X],us|bl}n[I' );
define( 'SECURE_AUTH_SALT', 'y5GQdodCVWM]7ob!G|GR}7/[uWotBcc,l?dGu@dp)ea,kfD>x{v>^g+aVl6(E#sp' );
define( 'LOGGED_IN_SALT',   'LH*FlbVYko5&N~*b(|pHybmJ}/8$H{&9RnKl[TE`i;[U>p&q_.5Tv:P9CLOx@V?d' );
define( 'NONCE_SALT',       '^Py|zT-dl/J|KOA)B`j$3p.w<f/sEh4mNJ6s[^u|q17L0eye*AOkrv0(8DS=#[;a' );
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
