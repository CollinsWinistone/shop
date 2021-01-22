<?php
/**
 * configurations file for the site
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
    define("DB_PASSWORD","");
    define("LOGIN_URL","http://localhost/dary/index.php");


}




?>