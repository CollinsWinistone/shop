$(function () {
    $insert = $("#cmdInsert");
    //$form = $("form").parents().
    $input = $("form").children("[name]");
    $delete = $("#cmdDelete");
    $update = $("#cmdUpdate");
    $view = $("#view");

    // display data 0.5 sec after the form has loaded
    setTimeout(showCurrentStockInDb, 500);
    // display data  when the vie button is clicked
    $view.on("click", function (e) {
        e.preventDefault();
        showCurrentStockInDb();

    });
    $delete.on("click", function (e) {
        e.preventDefault();

        $(this).removeClass("w3-red");
        deleteItem();
    });

    $insert.on("click", function (e) {
        e.preventDefault();

        addToDatabase();
        //$("#confirm").text("Hello word");
        //$(this).removeClass("w3-green");
    });

    // when the view button is clicked upadate the view with current changes.
    $update.on("click", function (e) {
        e.preventDefault();
        //$("#confirmUpdate").text("result");
        updateItemInDb();
        
    });

    // send a data delition
    function deleteItem() {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var text = this.responseText;
                $("#confirmDel").text(text);
            }
        }

        xmlhttp.open("POST", "../stock/AdminDeleteFromStock.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(collectData());
    }
    // add item to database 
    function addToDatabase() {

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var result = xmlhttp.responseText;
                result += collectData();
                $("#confirm").text(result);

            }
        }
        xmlhttp.open("POST", "../stock/adminAddStock.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(collectData());
    }
    // update items in the databases
    function updateItemInDb()
    {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                $("#confirmUpdate").text(result);
            }
        }
        
        xmlhttp.open("POST", "../stock/adminUpdateStock.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(collectData());
    }

    // update the view in the database everytime the view button is pressed
    function showCurrentStockInDb()
    {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                $("#rowsDisplay").html(result);
            }
        }
        xmlhttp.open("GET", "../stock/htmlTableProcuctView.php")
        xmlhttp.send();

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