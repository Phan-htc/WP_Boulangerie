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
define( 'DB_NAME', 'LBNR' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'LBNR' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'a1<-b?GE^1rFSgOK# N_mS*yxIc2RKCrtzt[v!>*mbYS3|p3*91H@Y3FX%B3!2J=' );
define( 'SECURE_AUTH_KEY',  'XDSStR2=eXizXm w!L4x}pC*K-g:nw3kq%1&YDJs^cdcXiFK|V.E!ww845$MCa3Z' );
define( 'LOGGED_IN_KEY',    'A__~t/;C)8ZkdeFYYx30&qH]7C;xznZb//a,tmUjQhL7$<)OmeG1^h]3@?IanAdo' );
define( 'NONCE_KEY',        'vhAL_doB8HHJ6NB#hm-h&{cgKlOw^8/V/Zb!?!K+}b]UMb32c).aMPH9?SCaRPV4' );
define( 'AUTH_SALT',        '_A{|,e59e)2L*6G /#.aJx;{3-Agh<(1`&4eav*OasTW#|V&A@<*;|Peu_[THnj|' );
define( 'SECURE_AUTH_SALT', 'I^T&h75Bt%o~Z&CTo%I+yENo.:yjtAhDrvqme/dMi22`1o=]Z`}&h3O:fxM=*6Cx' );
define( 'LOGGED_IN_SALT',   'X3/5L)?bEpd4$_n=*2KqZp8x/rLjWZnXssI[FfVRw1s{T oUUV)oZR}b/]y%Hrg.' );
define( 'NONCE_SALT',       '4qPo X(f!#j~Y@<Tnd1^([QmbbL}dyR9z_g5*:xHXET&^Ik=R@lJu *0j-1M5-~n' );
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
