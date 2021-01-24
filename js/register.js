/**
 *@author Collins Simiyu
 *Registration script to make our site more interactive
 */

$(document).ready(function(){
    //hide the ajax login button
    $('#ajax_login').hide();

    /**
     * registers a user to the site
     */
    function register()
    {
        
        $('#register').on('submit',function(e){ //when form is being submitted
            e.preventDefault(); //prevent it being sent
            var details = $('#register').serialize();
            var url="../registration/add_user.php";

            $.post(url,details,function(data){
                $('#register').html(data);
                //show the ajax login button
                $('#ajax_login').show();

            });


        });
    }

    /**
     * validates registration data
     */
    function validateRegisterInput()
    {

        //test srcript
        alert("The new scrip is working");
        //script.src  = "global_scripts/validator.js";
        var fn      = $('#first_name');
        var ln      = $('#last_name');
        var email   = $('#email');
        var pas     = $('#password');

        var valid   = new validate();
        
        //check if all registration inputs are in valid format
        if (valid.email(email) &&
            valid.password(pas) &&
            valid.email(email) &&
            valid.username(fn) &&
            valid.username(ln) 
        )
        {
            register();
        }
        else
        {
            alert("wrong data passed to the script...");
        }
    }
    //end of validateRegisterInput

    validateRegisterInput();




});

