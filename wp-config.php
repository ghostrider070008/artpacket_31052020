<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Sx4dnp0Osi_$|y5]|bPJIYWcrfD?SPI2 <wGpC-8c?Q$`c{&o)iPOU_q9`;A[^Oa' );
define( 'SECURE_AUTH_KEY',  '}<P/Rnsi>qr2cMHK=nFZ$K3JKmmL5D)B~dK}hg4sE%XI-Qh_fxrkN=?]Ic 1o}05' );
define( 'LOGGED_IN_KEY',    ',xVJ):=J3bZ`+K%z,T|?9x%HK0J<~_ Dr4g&NHs<)I7/se`~;Oi#Ke3w$;+(<4.U' );
define( 'NONCE_KEY',        'lGU35qJnX@Uv9@$GdJ[o&G)YL2XRA.[OCAt,%J*XgBV*^*=M_,FSAXoB.X|UlFPt' );
define( 'AUTH_SALT',        'xLytlvPb|N@,Z/{LQjL#swASS=k`(Ys>a0]oP_I0Vz+PpAwX#2b2F2RdZCR|R6OW' );
define( 'SECURE_AUTH_SALT', '{Eqw2JZS*GBU(lK#$-1)a4T#SYcOm:)llac>. 2I2TNW~.;nEWK>AGiW;s,:rG|e' );
define( 'LOGGED_IN_SALT',   '@t;lg&91n)%V$stO[E^C:qy7y#vP]86*:Q+#Yoo.V~`g>/M:k^0)hh9K6!3o^gHt' );
define( 'NONCE_SALT',       'Z5)&[=u?!3vQnrzHKg&Jd,M//=CNv+bVCl_ zWCNmk&;1I,vB??}=iYRY^_3tI,y' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
