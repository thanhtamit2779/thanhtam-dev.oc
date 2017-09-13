<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/thanhtam-dev.oc/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/thanhtam-dev.oc/');

// DIR
define('DIR_APPLICATION', 'C:/xampp/htdocs/thanhtam-dev.oc/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/thanhtam-dev.oc/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/thanhtam-dev.oc/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_PRODUCT_TEMPLATE', DIR_TEMPLATE . 'default/template/common/product/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', '_thanhtam-dev.oc');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');