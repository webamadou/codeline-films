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
define('DB_NAME', 'codeline_wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'bilfathi26');

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
define('AUTH_KEY',         'P(HdH##o_,tS2cWkdte.M!?b[c|r(iQ.O|0XH135GxUzpk2Pp&>gc]}@3} PywaW');
define('SECURE_AUTH_KEY',  'G|M#]%>w;0|zB--vCzG+)/7#-Uf07xc Y]~$<;TMA/hOX(z<AwDioBkY$5x+dn_c');
define('LOGGED_IN_KEY',    '_n=K=0]nYd4Nq2t+5=>iip@9ZgGBrp.5oj=Y&w)DXa_|:Mq$=ef:k7yYZ3=- >9f');
define('NONCE_KEY',        'bI#$w*1B#.m*1n]g5+(6-;<uY<d*i)ht%8G`8bQ~.0|ic)EdZ;jY)at(b6pY9g58');
define('AUTH_SALT',        'opYA|S@XT&KsHIQ5RO=9xiC/Ek`?}p6}Woa|-w#!x}|4s,rwBSCt.H%?|Q[wvS58');
define('SECURE_AUTH_SALT', 'xT=2ot[.BVC-|@;!sCQ76*SgsH_7*l^3vO#0yq?L,;Q&Ka_b-y?z#=.A`Hn,i?cb');
define('LOGGED_IN_SALT',   'Q!B%RH_TBu0l9-EvhA_4x%81G?|#MA1&,<X!6~`p[&aaN<H0l5{uUJ#w{PKux+$^');
define('NONCE_SALT',       'nLFV j.lm|Tm8:O)ofP7Uu9O(^?]m83)Z.Vd-=[L0ikP}R|Kl#bU`VbY@IB;y$(|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'cwp_';

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

define('FS_METHOD','direct');