/**
 *@author Collins Simiyu
 @copyright COSA INC
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
        validateRegisterInput();
        registerInfoToSite();


        
       
    }

    /**
     * performs the ajaxregister function which  in turn
     * perfoms the actual registration of the user to the site
     */
    function registerInfoToSite()
    {
        $('#register').on('submit',function(e){
            e.preventDefault();
            ajaxregister();
        });
    }
    //end of registerInfoToSite

    /**
     * validates registration data
     */
    function validateRegisterInput()
    {

    
        var fn      = $('#first_name');
        var ln      = $('#last_name'); // DOM elements from registration.php file
        var email   = $('#email');
        var pas     = $('#password');

        

        var valid   = new validate(); //object in global_scripts/validator.js

        $('.reg_input').on('blur',function(){
            $id = $(this).attr('id'); //current element's id
            $inp_value = $(this).val(); //current element's value
            
            if(($id == 'first_name') || ($id == 'last_name'))
            {
                var isValid = valid.username($inp_value); //validates username
                if(!isValid)
                {
                    $(this).after("<p class =\"response\"><b>name must be valid characters </b></p>");
                    
                    $(this).focus(); //set the focus to the current element
                    $('.response').fadeOut(3000);
                }
            }
            else if($id == 'contact')
            {
                var isValid = valid.contact($inp_value);
                if(!isValid)
                {
                    $(this).after("<p class =\"response\"><b>must be a valid phone number</b></p>");
                    
                    $(this).focus();
                    $('.response').fadeOut(3000);
                }
            }
            else if($id == 'email')
            {
                var isValid = valid.email($inp_value);
                if(!isValid)
                {
                    $(this).after("<p class =\"response\"><b>Email must be 5 charcaters longer</b></p>");
                    
                    $(this).focus();
                    $('.response').fadeOut(3000);
                }
            }
            else if($id == 'password')
            {
                var isValid = valid.password($inp_value);
                if(!isValid)
                {
                    $(this).after("<p class =\"response\"><b>password must be 5 characters longer</b></p>");
                    
                    $(this).focus();
                    $('.response').fadeOut(3000);
                }
            }
        });
        
    
    }
    //end of validateRegisterInput

    /**
     * sends an ajax request to register a user to the site
     * Appends the response to the section containing the registration
     * form
     */
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
    //end of ajaxRegister

    register();




});

