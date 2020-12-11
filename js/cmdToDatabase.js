$(function () {
    $insert = $("#cmdInsert");
    //$form = $("form").parents().
    $input = $("form").children("[name]");
    $delete = $("#cmdDelete");

    $delete.on("click", function () {
        $(this).removeClass("w3-red");
        deleteItem();
    });

    $insert.on("click", function () {
        addToDatabase();
        //$("#confirm").text("Hello word");
        //$(this).removeClass("w3-green");
    });

    // send a data delition
    function deleteItem() {
        var xmlhttp = new XMLHttpRequest;

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var text = this.responseText;


                $("#confirmDel").text(text);
            }
        }

        xmlhttp.open("POST", "/stock/AdminDeleteFromStock.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(collectData());
    }
    // add item to database 
    function addToDatabase() {

        var xmlhttp = new XMLHttpRequest();
        //var sendData = $("input");
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var result = xmlhttp.responseText;
                result += collectData();
                $("#confirm").text(result);

            }
        }
        xmlhttp.open("POST", "/stock/adminAddStock.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(collectData());
    }

    // collect all input from a form  that is currently oped
    function collectData() {
        
        var data = "";

        $input.each(function () {
            $this = $(this);
            // find the accestor of the input which is a div and contains class query
            $ancestor = $this.closest("div.query");
           
            // if the ancestor is hide continue 
            if ($ancestor.is(".w3-hide")) {
                return ;
            }
          
            // element == this

            var name = this.name; // get name of input
            var value = this.value; // get value of input

            //form a string of name and  value to be used in the post request
            data += name + '=' + value + '&';

        });

        // return the post string to the call
        return  data.substring(0, data.length - 1);


    }

});