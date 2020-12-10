$(function () {
    //alert("Hello");
    $open = $(".open");
    $query = $(".query");



    $open.on("click", function () {
        $query.addClass("w3-hide");
        $id = this.id; // get id of the button
        $class = "." + $id // make a class based on the id of the button
        $($class).toggleClass("w3-hide", "w3-show"); // remove class hide and add class show
    });
    
});