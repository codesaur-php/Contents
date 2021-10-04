<?php

namespace codesaur\Contents\Example;

/* DEV: v1.2021.10.04
 * 
 * This is an example script!
 */

ini_set('display_errors', 'On');
error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE);

require_once '../vendor/autoload.php';

use PDO;
use Exception;

use codesaur\Contents\ContentModel;

try {
    $dsn = 'mysql:host=localhost;charset=utf8';
    $username = 'root';
    $passwd = '';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    $pdo = new PDO($dsn, $username, $passwd, $options);
    echo 'connected to mysql...<br/>';
    
    $database = 'contents_example';
    if ($_SERVER['HTTP_HOST'] === 'localhost'
            && in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))
    ) {
        $pdo->exec("CREATE DATABASE IF NOT EXISTS $database COLLATE " . $pdo->quote('utf8_unicode_ci'));
    }

    $pdo->exec("USE $database");
    echo "starting to use database [$database]<br/>";
    
    $content = new ContentModel($pdo);
    $content->setTable('templates');
    $terms_of_service = $content->getRowBy(array('keyword' => 'tos'));
    $forgotton = $content->getRowBy(array('keyword' => 'forgotten-password-reset'));
    var_dump($terms_of_service, $forgotton);
} catch (Exception $ex) {
    die('<br />{' . date('Y-m-d H:i:s') . '} Error[' . $ex->getCode() . '] => ' . $ex->getMessage());
}
