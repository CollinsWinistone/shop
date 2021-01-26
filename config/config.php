<?php
/**
 * configurations file for the site
 * @author Collins Winistone
 */

$root =" http://localhost/shop/";

if(!defined('DB_HOST') &&
   !defined('DB_NAME') &&
   !defined('DB_USERNAME') &&
   !defined('DB_PASSWORD') &&
   !defined('LOGIN_URL')
   )
{
    define("DB_HOST","localhost");
    define("DB_NAME","dary");
    define("DB_USERNAME","root");
    define("DB_PASSWORD","password");
    define("LOGIN_URL","http://localhost:8080/dary/index.php");


}




?>