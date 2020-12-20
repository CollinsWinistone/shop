/**
 *@author Collins Simiyu
 *Registration script to make our site more interactive
 */

$(document).ready(function(){
    //hide the ajax login button
    $('#ajax_login').hide();

    //register function
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

//call register function

register();

});

