$(document).ready(function(){
    

        function sellProduct()
        {
            $sell_btn = $('.sell_button');
            
            $sell_btn.on('click',function(e){
                //prevent the default action
                e.preventDefault();
                //grab all table data classes
                $parent = $(this).parent();
                $pid = $parent.siblings('.p_id').text();
                $req_units = $parent.siblings('.req_units').children('.input_textbox').val();
                
                var url = "http://localhost:8080/dary/sell/sell.php";
                $.ajax({
                    type:"POST",
                    url:url,
                    data:{
                        product_id:$pid,
                        units_req:$req_units
                    },
                    success:function(response)
                    {
                        if(response == "success")
                        {
                            alert("product sold successfully");
                        }
                        else
                        {
                            alert("no product sold at all");
                        }
                    },
                    fail:function()
                    {
                        alert("failed...");
                    }
                });


            });
        }

        sellProduct();
  
});