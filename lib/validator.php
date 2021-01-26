<?php
/**
*this class validates data to ensure it is of the right format
*eg it ensures email is passed in its correct format
*@author -collins simiyu
**/

class validator
{

    public function email($email)
    {
        //checks the email
        //$pattern = "//";
    }

    public function password($password)
    {
        //checks if the password is valid
        if(count($password) < 5)
        {
            return false;
        }
        return true;
    }

    public function username()
    {
        //checks if the username is valid
    }

    public function selling_price()
    {
        //checks if the selling_price is  a valid number format
    }
}


?>

