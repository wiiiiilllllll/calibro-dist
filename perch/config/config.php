<?php
    define('PERCH_LICENSE_KEY', 'P21609-ZDW650-GYZ757-HCN154-PHD019');

    define("PERCH_DB_USERNAME", 'willwall_calibro');
    define("PERCH_DB_PASSWORD", 'calibroconsultants');
    define("PERCH_DB_SERVER", "10.169.0.133");
    define("PERCH_DB_DATABASE", "willwall_calibro");
    define("PERCH_DB_PREFIX", "perch2_");

    define('PERCH_TZ', 'Europe/London');

    define('PERCH_EMAIL_FROM', 'will@willwallace.name');
    define('PERCH_EMAIL_FROM_NAME', 'Will Wallace');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);
