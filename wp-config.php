<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^TWZC0P3~w~YpMF-(uIqff5b=_r,qHdX?E#5v3}D}H.*8UpF^i4#;C%ERL;`0[XW' );
define( 'SECURE_AUTH_KEY',  '1F Y~=}p2k(%4G!E*?SjwadW[vnU*$0A,nxn?*Lne>x9^yxO7|j`i^A_nD[)o;U#' );
define( 'LOGGED_IN_KEY',    'r)0, c`9X{D<dwD%UFOo_GA4TV;9z+g1;SM-XLtq<U %jE4A_)<L)T}z<6(ruvgO' );
define( 'NONCE_KEY',        'L$)hgE<iwdaBnQsl/s,iFIk_X,:{qTh:=)A*D$D?sA:ltM#Ns6>>YN}P/dfZw`pg' );
define( 'AUTH_SALT',        'nCw7v.=B!<Xp5<=r(]`Z)ihd2}~Ow&v|bL]qnOTW%Eqgk5)+vNrvpkH]kARzyV.i' );
define( 'SECURE_AUTH_SALT', '7tK|sY}t&mTuPq]?Q&j=bA;K1*++ cOj:<w]]Y0`^(CwQ/~u%/?_m&w@6*E#NY0-' );
define( 'LOGGED_IN_SALT',   't#p^0HCTJ{sDokXxJavg#XgMXVfU~03IT%xi(A~QtS(;`x`J=L1+vC%tG4^dn+HH' );
define( 'NONCE_SALT',       'rk@]9AXCe7C*8sm77C7Ur0/KG-{UThwd{c-CT2b{#i)Wn`q -6^.rCu.U1x[4z3s' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
