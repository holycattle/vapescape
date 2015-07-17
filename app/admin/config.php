<?php
// HTTP
define('HTTP_SERVER', getenv("HTTP_SERVER") + "admin/");
define('HTTP_CATALOG', getenv("HTTP_SERVER"));

// HTTPS
define('HTTPS_SERVER', 'http://192.168.59.103:8002/admin/');
define('HTTPS_CATALOG', 'http://192.168.59.103:8002/');

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
define('DB_HOSTNAME', getenv("DBHOST"));
define('DB_USERNAME', 'vape');
define('DB_PASSWORD', getenv("DB_PASS"));
define('DB_DATABASE', 'vapescape');
define('DB_PREFIX', 'oc_');
