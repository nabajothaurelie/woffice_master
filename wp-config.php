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
define( 'DB_NAME', 'woffice' );

define('WP_ALLOW_REPAIR', true);

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
define( 'AUTH_KEY',         'Kzql,HD3;]I`]RZ/iy5aMx#.cVv:tdYL6u`wi{`G~6,%3hBr~YNnFA=:>9$QfXrV' );
define( 'SECURE_AUTH_KEY',  '4HoS9g)BH.PslClH,##EC1~R.^{Ncq$.1Vi$cFDG|vyYazn3O1qMI|Eh:sz5TNH5' );
define( 'LOGGED_IN_KEY',    'EL GNDhj0{ovg{9$97yl]iq[wgw#v25/+q(vmx/G/4K`,=?m2u 8-7W)Vx2b($R_' );
define( 'NONCE_KEY',        'C%mfvo]Dy;Kz7u-464xFfP5o)!gZ>wzxj:nz;UBqai(xrx@gw)n5GNCA)!57Zq8r' );
define( 'AUTH_SALT',        'dD#4h9,O^LrPhr[HDEA%.>n1=Lg7]28uU!#I#cfckc#=JRB`d}.ghn*@l(Ms[{7.' );
define( 'SECURE_AUTH_SALT', 'sP(?~YS8BYj~gS6mri4sdz?#@3UB3aq@m?4<.m7hd7C,%)ASTSgwHuKv,*ak<$z>' );
define( 'LOGGED_IN_SALT',   'nLz,d9-B4#6JOmRA4{90?4pGl9l@Rn9bXCnqFO(O@z#FzuK*@fMNB*?Q <}6@|/u' );
define( 'NONCE_SALT',       '^vi>V:qQBzd}4F~K)K,3|g*3>~-azQ@]E&nK5pX,te2tm|@SBsWc.u@Wqf&12 Rs' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'woffice_';

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
