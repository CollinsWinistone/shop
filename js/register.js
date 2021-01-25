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

            var isvalid = validateRegisterInput();
            if(isvalid)
            {
                ajaxregister();
            }
            else
            {
                alert("wrong data passed in scripts...");
            }

            


        });
    }

    /**
     * validates registration data
     */
    function validateRegisterInput()
    {

    
        var fn      = $('#first_name').val();
        var ln      = $('#last_name').val();
        var email   = $('#email').val();
        var pas     = $('#password').val();

        

        var valid   = new validate(); //object in global_scripts/validator.js
        
        //check if all registration inputs are in valid format
        
        if (valid.password(pas) &&
            valid.email(email) &&
            valid.username(fn) &&
            valid.username(ln))
        {
            return true;
        }
        return false;
    }
    //end of validateRegisterInput

    function ajaxregister()
    {
        var details = $('#register').serialize();
            var url="../registration/add_user.php";

            $.post(url,details,function(data){
                $('#register').html(data);
                //show the ajax login button
                $('#ajax_login').show();

            });
    }

    register();




});

