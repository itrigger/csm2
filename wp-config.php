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
define( 'DB_NAME', 'csm' );

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
define( 'AUTH_KEY',         'h] y*U4aKvp%i~L1PJ%_@_%r.|Y&:FpIaLmF6^xD|xuFJ y^r?cLe=VAxrm.)B!*' );
define( 'SECURE_AUTH_KEY',  'Lb?gJa&r+8DxRKH9x U]H^@W$M|Krnb{BQ^mVk#oly?D,=Z6m}F!si.w*{9eUq?|' );
define( 'LOGGED_IN_KEY',    '9hsgP_/XSSbOr]~8#!~A6;-O3q2b[}(] Z YT$2g-b:~hNmFe.qcoP3/QI=F%uZ{' );
define( 'NONCE_KEY',        'lP*1U#II*:i$v^JTof|5g=Pu(lWOfa4St_LuHaucRT9$P8}roVOD9cBr$9 lV7AZ' );
define( 'AUTH_SALT',        ']TfMj@PRa0nhuW`W/6T0$UV^F[KJex]YbyEz#mMP&6KsBZLFsBH)_j%*0iw(=|dJ' );
define( 'SECURE_AUTH_SALT', '6)S z8|[w4PF?Kl^oqm-9^a+*Fn_hL=#a[=48}Y7?1H<.RUTyTGMXjH0Z-G-d<AE' );
define( 'LOGGED_IN_SALT',   'CVL.zTE&t!=1-QnqmCq|${H@;RdO+AFGfD2_pFtcAyi7WTy}!OF,GCrQCD4L#H+)' );
define( 'NONCE_SALT',       '<g9>6osT[-xZjZU,2K%0hy[;WprZ-=yYu($8By0-dLJhOR$m,@bLm4+/)nP6$Tyb' );

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
