<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

define( 'ITSEC_ENCRYPTION_KEY', 'Z2IyclNsQUE0PTVQQS8tWWA/L1pTfDFqcjxwdFt8XzFtIHFXbltVfiklRy9aNFZgVSojXTo+bzhPKG5CaFA1WA==' );

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
define( 'DB_NAME', 'bricotips' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Neuneu59' );

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
define( 'AUTH_KEY',         'Y=4h-_ r8qVfl7s=+8&[8OgAVa&^E]J0*NFcw9Z!R[Cq%TL;5?-krirYnyMkz8Bg' );
define( 'SECURE_AUTH_KEY',  ')$T{3#FF#.u.F]q-ui.AT@w>m ?a^:-|/>(9X3s#?<th+MT*h$NLwy<}U=@]l84>' );
define( 'LOGGED_IN_KEY',    '&f$E#<F@NOS?@1#f/JJM*2+.@Am`q{I1,VtU9x%[QLyw#Xa.iX[Te$D{c*:bxZQC' );
define( 'NONCE_KEY',        'L@QHK:Cks6 $D[&*})ThG={.Zr_Bl}NZ!;iPcQzcU5JDMu/d]7o1)t)%SMoJPGZW' );
define( 'AUTH_SALT',        '@Oqs8F/ f(mU%kho,~ |3U,GIW_51s93_1C#O8$D],5$@xUq=`~{rikr*D(4rP43' );
define( 'SECURE_AUTH_SALT', 'x|52QWSGR3%{VgNG_[Kd<EKmk1169c hY93f}fbl*aIDwx-q;L%M%H5v3 L)|54&' );
define( 'LOGGED_IN_SALT',   '4#QS,q#/YLOma)}-PKSheJ).<h49dSF3JU%pc5xRwz$mGz!MZ(ZS}kwk*,K9%0sl' );
define( 'NONCE_SALT',       '#9=x{U|,.{!j0y|TE3)CQ0,ZfJ.!}yjk]OS8`)kT%>7#9F$8e3*6s5-!{R_uF HQ' );
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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
