<?php
// HTTP
define('HTTP_SERVER', 'http://rayyeh.net/stores/');

// HTTPS
define('HTTPS_SERVER', 'http://rayyeh.net/stores/');

// DIR
define('DIR_BASE', '/home/rayyeh/public_html/stores/');
define('DIR_APPLICATION', DIR_BASE . '/catalog/');
define('DIR_SYSTEM', DIR_BASE . 'system/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_IMAGE', DIR_BASE . 'image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'rayyeh_open');
define('DB_PASSWORD', '9a230ad6');
define('DB_DATABASE', 'rayyeh_wooDB');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
