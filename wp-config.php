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
define('DB_NAME', 'shachtarochka');

/** Имя пользователя MySQL */
define('DB_USER', 'shachtarochka');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mh~,l:mnl<a4>.#E.D^XVxh :TtXK<v/B=T{#$M6KD+>%zWAU~4Ts3QI1c[G@%q~');
define('SECURE_AUTH_KEY',  '{V-]lq8jHj.K6H|8ICdZPo_(-K<HpmjZ$aCcG{P:L2m%b$%W_.`N0_OKP~Bj^S/Y');
define('LOGGED_IN_KEY',    'D9oJF0NsDvaq^3%qA-LO9T|349-K LEjLx(zy-~aUbeO@ur>zs(*Y*3GeYs^1#gi');
define('NONCE_KEY',        '}{=H59~iuc}zp<|)5gcePkGRiT9TzGqq-<~Dq:HJ/C8Y*.3_B?r,jHAOE3[g4;ao');
define('AUTH_SALT',        '(+TJ+=x _Y*J4e0e$8 loq*K^y0GSn6dWG,{?EzBHj}E#gE6B>k+| ?j/l#46AKZ');
define('SECURE_AUTH_SALT', '*xg89J)syt_@T!i< EKyUGS|p^m>u:E$HyzutH@Zay9}jPL3RDXacKG&_hNJ6z6Q');
define('LOGGED_IN_SALT',   'D0hzc`fhRMF4/t2lZ?_1W13o2=[%&D#I_M6p@=<HbU3%LX9<,#n@rD;&Z7~+Ml*o');
define('NONCE_SALT',       '-fA&qESjRdl>elYD6hZf-hM]5bEBWKK~MPU2%(TG:!q`A0.jx+F1`;sJzR;]6`:K');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'shk_';

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
define('WP_DEBUG', false);

define('WPLANG', 'ru_RU');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
