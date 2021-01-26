<?php
/**
*this class validates data to ensure it is of the right format and data type
*eg it ensures email is passed in its correct format
*@author -collins simiyu
**/

class Validator
{

    /**
     * validates email
     *
     * @param [string] $email the user's email address
     * @return bool
     */
    public function email($email)
    {
        //checks the email
        $pattern = "/\w@gmail.com/";
        if(preg_match($pattern,$email))
        {
            return true;
        }
         return false;

    }

    /**
     * validates password
     *
     * @param [string] $password
     * @return bool
     */
    public function password($password)
    {
        //checks if the password is valid
        $pass_length = strlen($password);

        if($pass_length >= 6)
        {
            return true;
        }
        return false;
        
        
    }

    /**
     * validates username
     *
     * @param [string] $username
     * @return bool
     */
    public function username($username)
    {
        //username must be atleast 6 characters long
        if(strlen($username) <5)
        {
            return false;
        }
        return true;
    }

    /**
     * Validates phone number
     *
     * @param [string] $phone
     * @return bool
     */
    function validate_phone_number($phone)
    {
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $phone_to_check = str_replace("-", "", $filtered_phone_number);

        // Check the lenght of number
        // This can be customized if you want phone number from a specific country
        if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
            return false;
        } else {
        return true;
        }
    }

    
}


?>

