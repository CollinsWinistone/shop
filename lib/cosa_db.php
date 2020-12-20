<?php


/**
*this class models a database connection to be used throughout the site
*It trys to connect to the datbase and returns a datbase object to the *calling object
*
**/
class Database
{
    private $dbc;//database connection
    private const DB_HOST = "localhost";
    private const DB_NAME = "dary";
    private const DB_USERNAME = "root";
    private const DB_PASSWORD = "";
    


    /**
     * Establishes a database connection to the site
     *
     * @param string $host
     * @param string $user_name
     * @param string $db_name
     * @param string $db_password
     * @return object $db
     */
    public static function connect($host,$user_name,$db_name,$db_password)
    {
        $db = new mysqli(
            $host,
            $user_name,
            $db_password,
            $db_name
        );
    
        if($db->connect_error)
        {
            die("cannot connect to the datbase:\n"
                .$db->connect_error."\n"
                .$db->connect_errno
            );
        }
        return $db;
    }//end connect

    /**
     * Creates a default datbase connection
     *
     * @return object $db
     */
    public static function connect_default()
    {
        $db = new mysqli(
            self::DB_HOST,
            self::DB_USERNAME,
            self::DB_PASSWORD,
            self::DB_NAME
        );
    
        if($db->connect_error)
        {
            die("cannot connect to the database:\n"
                .$db->connect_error."\n"
                .$db->connect_errno
            );
        }
        return $db;
    }

    public static function test()
    {
        echo "Hello collins simiyu";
    }

}


?>