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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'pizzatime' );

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
define( 'AUTH_KEY',         'H]}xUQXjltpQ;eA)Y7xq^d=qi.,td]T^;qqgbAA7c1fq:SZZmKlJ0={SYfvqC#WM' );
define( 'SECURE_AUTH_KEY',  'Z$_Im:`9E)y:oJz`Lr:L8-5/8N^k?vC!<mMcaw>7TmX5.#e8/<n;.Nfu`g(vqg*@' );
define( 'LOGGED_IN_KEY',    ' `DTXZ~&I/da5v_m]%DNW{~W|i-U9K+=nXPA+b;7xEg.DBn}(h<=qt,b>ct6!zFR' );
define( 'NONCE_KEY',        'Ko&*Y:nHZIIg!7F$o)gcb/$2lKET>1eJgI#GiA9[YRVJj)[?|qg@Rki[iy[g[c@-' );
define( 'AUTH_SALT',        '6]_.kkHY@vBqcI(vha4Fsz.Jxu6jo$g`Z|4W2r$H^>s$oht9/UWLeG12c[=))gi%' );
define( 'SECURE_AUTH_SALT', 'V69LHDam~6PGq}59vjnoG5c)D2{9FUP4m?PsQ<-^6q%OaRy&1|L5 $D`T:y$Y|]!' );
define( 'LOGGED_IN_SALT',   'A`wYX<9GZH=B9p?{Xu$y@*>8;ZvRN#n9aM_1U;s P.j%6b<>)&mbN-<&1%B07;[X' );
define( 'NONCE_SALT',       '{, #9Zl2KUA=;qLKEpKHO06@zGvFOe:5jvu[n(z3$M* .rwF~Mr0<Qr#.>O*Gg:L' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
