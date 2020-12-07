<?php
/*name verifier
*should not contain digits.
* should not contain special symbols.


email verifier
should be in this order
XXXXXXXXXX@[gmail].com or XXXXXX@XXX.XX.XX

password verifier
should have atleast: letter, symbol, digit
not more than 8 in lenght
not less than 5 in lenght
*/
?>


<?php



// validate name return 0 if no match , 1 if okay
function NameIsValide($name)
{

    $pattern = "/^[a-zA-Z]{3,}$/";

    return preg_match($pattern, $name);
}
//echo  NameIsValide("obirimocha654") . " valide";
//EmailIsValide("obirisacalivin123@student.ac.ke"); // test case 1
//EmailIsValide("Obiri12@yahoo.com");

// validate email
function EmailIsValide($email)
{
    $pattern = "/^\d*[a-zA-Z]{3,}\d*@([a-zA-Z]{2,}|.){1,4}[a-zA-Z]{2,}$/";
    //$pattern
    if(preg_match($pattern, $email))
    {
        //echo "valid Email";
        return true;
    }
    else
    {
        //echo "invalide email";
        return false;
    }

}

PasswordIsValide("ello123");
// validate password
function PasswordIsValide($password)
{
    $pattern = "/(([a-z])|(A-Z)){3,}\d+/";
    
    if(preg_match($pattern, $password))
    {
        echo "valide password";
        return true;

    }
    else
    {
        echo "invalide password";
        return false;
        
    }

}
?>

