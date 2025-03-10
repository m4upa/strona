<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0 k1L?yc?j)/$bo~@8b2DD|ws[56N-a5@>>wYS[?M@c}kg4mi`I&,)|J#mKR?1MZ' );
define( 'SECURE_AUTH_KEY',  '{QSQm_ <|#B*9fgyCr8WUv~ZsJdxJ.1fKXZs{gXdxL2Axrn8QvM_{spc;-/gF7P]' );
define( 'LOGGED_IN_KEY',    '{IeF;eN8PJ NIvyv5[4PF>xN6>w. eTaa$/X}MY]1BV9;Gi}Sz.x8xB5rn4nk{S ' );
define( 'NONCE_KEY',        'p A;DOmF=L(_^Z&=PC*A_r$C>K{|Dr80Bo2mrg|924(Yb6p_$!T*0ZZc:QI]QBf4' );
define( 'AUTH_SALT',        'm3{bTnLtGBuY;1|kQi- F%?JQLhk /25t5cG^s5/CAlzG875~e;C;%8[Eb!kJ#vt' );
define( 'SECURE_AUTH_SALT', 'LwSe 7TSaOB$pFcTQ;%L=U0x<%-DEIj umbi5S@7~{Wjn5n|a}4.(K1*2Bjl~/v^' );
define( 'LOGGED_IN_SALT',   'in@8p&(X^)4[8=3iQO+$:gNfI#jl?@C|ZwaAU=KGRn_*r[q-M7GDx#rG<4wVJXw`' );
define( 'NONCE_SALT',       '@AN;?V};HtCW;+`Uxp53]bS7I5`}@sV^7y(IJI2Oc>ge)hq%dL4m{_GOu:8W#:V@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
