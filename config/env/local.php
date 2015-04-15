<?php 
define('WP_DEBUG', true);

define('WP_HOME', 'http://wordpress.app');
define('WP_SITEURL', WP_HOME . '/wp/');

define('WP_CONTENT_DIR', APP_ROOT . '/public/content');
define('WP_CONTENT_URL', WP_HOME . '/content');

define('WP_PLUGINS_DIR', APP_ROOT . '/public/content/plugins'); 
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_playground');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';*~QxudZJo+KyWH]GO4IQT*_bAq[Y/TD5Ypo+w[|V@POp(Iw88pstSilIsuUe=UR');
define('SECURE_AUTH_KEY',  '|p-wBFY?$BM4%9!,R@>s_Iu42AxVL L(?E8m!?#mN(;X-&nkoOJJkU.Z0j3e+#<a');
define('LOGGED_IN_KEY',    '<+jj5,)soTMK[1WW9LeLgw%X5S|S u(-`oV^Ql,Lf+|J|WM[^|+*|P|f`JAla3Hu');
define('NONCE_KEY',        'S:^!5M($TqFC7]g Sk@W^uH~J{xi5N8!e^<25>S{zCW8C#H<>f9bn|%7m?8L1vxw');
define('AUTH_SALT',        '$Om_|PdBZ><{>BbDYhHNK_p=aqSA5Rh),xc.[~=[VvEu:$G:pLJ@(e?[-r;qFr6%');
define('SECURE_AUTH_SALT', '>kim8Q<@FB0d,11oc|3y6_PJ,9gCC(IU+U-=rann+HEwVL=)foHBq];|tsdR<:[9');
define('LOGGED_IN_SALT',   'R3xnRFo5R/Q:Xr,L.g}A1RI//%sO5wJOmNo<@|_^y5 ))w0|5!,6;};CX#ad3s(_');
define('NONCE_SALT',       '_1OBsUa:%+j,.9o-z>YN=Wn|FyD@X]>~^^C|}7aWs~o|p9@:#u=sz$T/SwBwFISC');

/**#@-*/
