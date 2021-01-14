$(document).ready(function(){
    
        /**
         * this function perfoms diffeent sells routine
         */

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
                    success:function(data)
                    {
                        updateProfitDom();
                        
                    },
                    fail:function()
                    {
                        alert("failed...");
                    }
                });


            });

            updateProfitDom();
        }

        function updateProfitDom()
        {

            var url = "http://localhost:8080/dary/profit/profit.php";
                $.ajax({
                    type:"POST",
                    url:url,
                    success:function(data)
                    {
                        //get the profit html code
                        $profit_dom = $('#profit');
                        $profit_dom.html(data);

                    },
                    fail:function()
                    {
                        alert("failed...");
                    }
                });
        }

        sellProduct();
        
  
});