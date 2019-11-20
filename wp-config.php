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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'PJ8RH[m[e*Food29*I~QF06ibKhqVdS!n9)-%[W?fRv:,ow+zIs<]^Mzj4A0H8jm' );
define( 'SECURE_AUTH_KEY',  '~ K?E^(cn5^<90Zs1J8HQFQp@6./5,R7/4Vu_81]`LF ;/B$t.f U6;Hx.?+k`Mn' );
define( 'LOGGED_IN_KEY',    '!Lt!}0UC;W;3#p;.Z0AHen^+6,Da^Heh-@%!TV` rY6{V|dtfqaO*G W|(47CLiq' );
define( 'NONCE_KEY',        '<G4?@b 6f2peQUBGOipe2l]5jOSFmbQ#<|0ELEml&GG;Z%E4G@yjdE*W..9:bkf=' );
define( 'AUTH_SALT',        'A#3xDeq?ji=v7Me# lQu{|i]Q5O?Dlewdcn<-5=ibU=8U8</(h|h__2_XZXQ-Ln$' );
define( 'SECURE_AUTH_SALT', 'A!zQ5^JK+wa~qr<NmbT`@X:k+exf[A_|kMaZMo$MS8|B!?F(:M7:^bqH)G.S$,J!' );
define( 'LOGGED_IN_SALT',   '+fx|p@W^mDnTiO*uQ.5q/sx#M<tf=BBQd$okV]EbSDr6VeJ&WS+G=XDbE12_mVlP' );
define( 'NONCE_SALT',       '6^7) nnPh61vet#$}#3aveI ]>As],snWu/a3rn/bRQ+&`N!)OHMVy+XvRpjm0[8' );

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
