/**
 * @author Collins Simiyu
 * This script handles an asyncronous login for our user
 */

 $(document).ready(function(){
     
    //function to login a user using ajax
    function login()
    {
        $('#login_form').on('submit',function(e){
            e.preventDefault();//prevent the form from being submitted
            var details = $('#login_form').serialize();
            var url = "../login/login_user.php";
            var email = $('#email').val();
            var password = $('#password').val();

            $.ajax({
                type:"POST",
                url:url,
                data:{
                    email:email,
                    password:password
                },
                success:function(response)
                {
                    if(response == "success")
                    {
                        window.location.href = "../index.php";
                    }
                    else
                    {
                        $('#response').html("incorrect credentials");
                    }
                }
            });
            
    
         });
    }//end of login function

    function loginRequired()
    {
        //hide links with login_required property 
        $('.login_required').hide();
    }
    //en of loginRequired function

    login();
    loginRequired();
 });