<?php
// HTTP
define('HTTP_SERVER', getenv('HTTP_SERVER') + 'admin/');
define('HTTP_CATALOG', getenv('HTTP_SERVER'));

// HTTPS
define('HTTPS_SERVER', getenv('HTTPS_SERVER') + 'admin/');
define('HTTPS_CATALOG', getenv('HTTPS_SERVER'));

// DIR
define('DIR_APPLICATION', '/vapescape/admin/');
define('DIR_SYSTEM', '/vapescape/system/');
define('DIR_LANGUAGE', '/vapescape/admin/language/');
define('DIR_TEMPLATE', '/vapescape/admin/view/template/');
define('DIR_CONFIG', '/vapescape/system/config/');
define('DIR_IMAGE', '/vapescape/image/');
define('DIR_CACHE', '/vapescape/system/cache/');
define('DIR_DOWNLOAD', '/vapescape/system/download/');
define('DIR_UPLOAD', '/vapescape/system/upload/');
define('DIR_LOGS', '/vapescape/system/logs/');
define('DIR_MODIFICATION', '/vapescape/system/modification/');
define('DIR_CATALOG', '/vapescape/catalog/');

// DB
define('DB_DRIVER', 'mpdo');
define('DB_HOSTNAME', getenv('MYSQL_PORT_3306_TCP_ADDR'));
define('DB_USERNAME', getenv('MYSQL_VAPE_USERNAME'));
define('DB_PASSWORD', getenv('MYSQL_VAPE_PASSWORD'));
define('DB_DATABASE', getenv('MYSQL_VAPE_DATABASE'));
define('DB_PREFIX', getenv('MYSQL_VAPE_DATABASE_PREFIX'));
