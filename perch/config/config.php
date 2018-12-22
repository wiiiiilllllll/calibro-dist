<?php
    define('PERCH_LICENSE_KEY', 'P21609-ZDW650-GYZ757-HCN154-PHD019');

    $http_host = getenv('HTTP_HOST');
    switch($http_host) {
        case('192.168.33.10') :
            define("PERCH_DB_USERNAME", 'perch');
            define("PERCH_DB_PASSWORD", 'fKv%6JR!K%NDDXdm8X7e4Kan2Q^WzePQ');
            define("PERCH_DB_SERVER", "localhost");
            define("PERCH_DB_DATABASE", "calibro");
            break;

        case('willwallace.xyz') :
            define("PERCH_DB_USERNAME", 'willwall_calibro');
            define("PERCH_DB_PASSWORD", 'calibroconsultants');
            define("PERCH_DB_SERVER", "10.169.0.133");
            define("PERCH_DB_DATABASE", "willwall_calibro");
            break;

        default :
            define("PERCH_DB_USERNAME", 'c4libroc_perch');
            define("PERCH_DB_PASSWORD", 'juz4rR@wEJ&PgJ7VnjwqfUBx');
            define("PERCH_DB_SERVER", "localhost");
            define("PERCH_DB_DATABASE", "c4libroc_perch");
            define('PERCH_EMAIL_FROM', 'hello@calibroconsultants.com');
            define('PERCH_EMAIL_FROM_NAME', 'Calibro Consultants');
            define("PERCH_EMAIL_METHOD", "smtp");
            define("PERCH_EMAIL_HOST", "calibro-consultants.com");
            define("PERCH_EMAIL_AUTH", true);
            define("PERCH_EMAIL_PORT", 465);
            define("PERCH_EMAIL_USERNAME", "hello@calibro-consultants.com");
            define("PERCH_EMAIL_PASSWORD", "u*95zfP^X7T6fJtQA4jFUb8*tcngwQhM");
            define("PERCH_EMAIL_SECURE", "ssl");
            break;
    }

    define("PERCH_DB_PREFIX", "perch2_");

    define('PERCH_TZ', 'Europe/London');


    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);
