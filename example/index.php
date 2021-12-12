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
use Throwable;

use codesaur\Contents\LookupModel;

try {
    $dsn = 'mysql:host=localhost;charset=utf8';
    $username = 'root';
    $passwd = '';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    $pdo = new PDO($dsn, $username, $passwd, $options);
    echo 'connected to mysql...<br/>';
    
    $database = 'contents_example';
    if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
        $pdo->exec("CREATE DATABASE IF NOT EXISTS $database COLLATE " . $pdo->quote('utf8_unicode_ci'));
    }

    $pdo->exec("USE $database");
    echo "starting to use database [$database]<br/>";
    
    $templates = new LookupModel($pdo);
    $templates->setTable('lookup_templates', 'utf8_unicode_ci');
    $terms_of_service = $templates->getRowBy(array('keyword' => 'tos'));
    $forgotton = $templates->getRowBy(array('keyword' => 'forgotten-password-reset'));
    var_dump($terms_of_service, $forgotton);
} catch (Throwable $e) {
    die('<br />{' . date('Y-m-d H:i:s') . '} Error[' . $e->getCode() . '] => ' . $e->getMessage());
}
