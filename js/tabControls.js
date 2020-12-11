$(function () {
    //alert("Hello");
    $open = $(".open"); // buttons
    $query = $(".query");



    $open.on("click", function () {
        $query.css("display","none"); // remove class show from all elements
        $query.addClass("w3-hide"); // add hide to each tab
        $id = this.id; // get id of the button
        $open.removeClass("w3-red"); // make all buttons black 
        $("#" + $id).addClass("w3-red");// make the selected button red
        $class = "." + $id // make a class based on the id of the button
        $($class).removeClass("w3-hide");
        $($class).css("display","block");
        //$($class).toggleClass("w3-hide", "w3-show"); // remove class hide and add class show
    });
    
});