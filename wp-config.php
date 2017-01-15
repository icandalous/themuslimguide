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
define('DB_NAME', 'themuslimguide');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Y{@xgmwMvz+]>.ckR1,+ihgGT&Y/Q/wX/hwl8RKh~n9`OT3@yJ@[UWt`f5[inw~R');
define('SECURE_AUTH_KEY',  'nA=brg~]wEh,@u?i7l?yd*^[^eV7G:nWw0|xf-i&R^laE )AaDxd`Zs&r_Tv[RsM');
define('LOGGED_IN_KEY',    'Z*ySC9JS_k&@ZOn7*0?SwU=vu}QQ(t_l:upCtuc.H{pO3zin/Kzy] =Rl/d-1 d&');
define('NONCE_KEY',        'mX4lo$P/<%y~gQ|m)#Dvu^j`ieoX0Te%<ybEKB14ah_Zf[#v*H(cLJns#r:b%]c:');
define('AUTH_SALT',        'kH5]<gSAT(u{ogW[4G/CI>{,=||NNk#/vnC1ZVAYM5>+Zq#aP/z$lH?%8I/5.HPF');
define('SECURE_AUTH_SALT', '3F`Y*gISHU^ n=%AloLWg7dj8Wyzoh=J]>gnd6xo,@cp,J,Pgqi*ZmxJPvkZRVE^');
define('LOGGED_IN_SALT',   '^8JoGoEN@{iwI0Se{-Oh.qk%v5YT9$sz6x,<Z|Y2I2@]oPV,?|&#c9e)N-5.epU9');
define('NONCE_SALT',       'j0BIVQ]*3F{j`UKmW.^zquaGe2;5f4)iCKmCjNTq6m|UWc90yK^!z9f6W^Qovv%Y');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');