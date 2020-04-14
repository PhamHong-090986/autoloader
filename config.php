<?php
    ini_set('display_errors', 'on');
    error_reporting(E_ALL);

    define('HOST', 'http://localhost:81/www/projet5/'); // js, css, images > fichiers publiques avec url
    define('ROOT', 'C:/xampp/htdocs/www/projet5/');


    define('CONTROLLER', ROOT.'Controller/');
    define('VUE', ROOT.'Vue/');
    define('MODELE', ROOT.'Modele/');
    
    define('ASSETS', HOST.'assets/');

    define('DB_HOST', 'locahost');
    define('DB_NAME', 'hong');
    define('DB_LOGIN', 'Camille');
    define('DB_PWD','123456');