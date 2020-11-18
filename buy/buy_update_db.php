<?php

session_start();
$user_id=$_SESSION['user_id'];
$sp=$_SESSION['price_per_unit'];
$bp=$_SESSION['buying_price'];
$total_units=$_SESSION['units'];
$user_units=$_POST['user_units'];
$pid=$_SESSION['product_id'];



$user_units = $_POST['user_units'];


if($total_units == 0)
{
    $profit = 0;
}
else
{
    $profit=($sp * $user_units) - ($bp/$total_units * $user_units);
}


include "../database/dbc.php";
mysqli_autocommit($dbc,FALSE);
$q="UPDATE user_info
    SET profit=profit+$profit
    WHERE user_id=$user_id";
$result=mysqli_query($dbc,$q);
$prof_count=mysqli_affected_rows($dbc);

if($prof_count==1)
{
    
    //update the units of stock remaining
    //check if thete are remaining units
    $available_units="SELECT units FROM product
                     WHERE product_id=$pid";
    $avu_result=mysqli_query($dbc,$available_units);
    
    if($avu_result)
    {
        $row=mysqli_fetch_array($avu_result,MYSQLI_ASSOC);
        if($row['units'] >= $user_units)
        {
            $update_units="UPDATE product
            SET units=units-$user_units
            WHERE product_id=$pid";
            $up_results=mysqli_query($dbc,$update_units);
            $count=mysqli_affected_rows($dbc);
            if($count == 1)
            {
                echo "success";
                mysqli_commit($dbc);
            }
            else
            {
                echo "count was not equal to one".mysqli_error($dbc);
                mysqli_rollback($dbc);
            }
        }
        else
        {
            echo "out of stock";
            mysqli_rollback($dbc);
            
        }
    }

    
    
}
else
{
    echo "profit not added<br> ";
    echo "$prof_count";
    echo $_SESSION['user_id'];
}


?>