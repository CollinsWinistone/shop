<?php
/**
*This class offers functionality that helps in different
*operations of stock for a particular user
*@author Collins Simiyu Wanjala
**/


class Stock
{
    private $id; //stock id
    private $item_name;//stock name
    private $date_added;//date the stock was added
    
    public function __construct()
    {
        //this is the construtor function
    }

    public function addStock()
    {
        //this methos adds stock to the database
    }

    public function removeStock()
    {
        //this function removes the stock from the database

    }

    public function deleteStock()
    {
        //this method deletes the stock fro the datbase

    }

    public function availableStock()
    {
        //checks the available stock from the database
    }

    public function bestSellingStock()
    {
        //returns the best 10 selling goods
    }

    public function worstSellingStock()
    {
        //return the worst selling goods
    }



}

?>
