/**
 *@author Collins Simiyu
 *Registration script to make our site more interactive
 */



$(document).ready(function(){
    //hide the ajax login button
    $('#ajax_login').hide();

    function validate()
    {
        /**
         * validates email on client side
         * @param {string} email 
         */
        this.email = function(email)
        {
           //validate email
           if(email.length >=5)
           {
               return true;
           }
           return false;
        };
   
        /**
         * validates password
         * @param {string} password
         */
        this.password = function(password)
        {
            if(password.length >= 5)
            {
                return true;
            }
            return false;
        };
   
        /**
         * validates username
         * @param {string} username 
         */
        this.username = function(username)
        {
            if(username.length >= 5)
            {
                return true;
            }
            return false;
        };
   
        /**
         * validates price
         * @param {number} price 
         */
        this.price = function(price)
        {
            //check if price is not a string
        }
    }
    //end of validate function decalarati

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
            return true;
        }
        else
        {
            return false;
        }
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

