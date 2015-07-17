<?php
// HTTP
define('HTTP_SERVER', getenv("HTTP_SERVER"));

// HTTPS
define('HTTPS_SERVER', getenv("HTTPS_SERVER")));

// DIR
define('DIR_APPLICATION', '/vapescape/catalog/');
define('DIR_SYSTEM', '/vapescape/system/');
define('DIR_LANGUAGE', '/vapescape/catalog/language/');
define('DIR_TEMPLATE', '/vapescape/catalog/view/theme/');
define('DIR_CONFIG', '/vapescape/system/config/');
define('DIR_IMAGE', '/vapescape/image/');
define('DIR_CACHE', '/vapescape/system/cache/');
define('DIR_DOWNLOAD', '/vapescape/system/download/');
define('DIR_UPLOAD', '/vapescape/system/upload/');
define('DIR_MODIFICATION', '/vapescape/system/modification/');
define('DIR_LOGS', '/vapescape/system/logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', getenv("DB_HOST"));
define('DB_USERNAME', 'vape');
define('DB_PASSWORD', getenv("DB_PASS"));
define('DB_DATABASE', 'vapescape');
define('DB_PREFIX', 'oc_');
