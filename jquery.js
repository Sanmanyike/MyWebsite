//Runs after the page has loaded
$(document).ready(function(){
    //Show alert box and profile picture
    $(window).on("load",function(){
        $(".alert").show(1000);
    });
    $(window).on("load",function(){
        $(".profilepic").show(2000);
    });
    //Show about cards and more
    var x = window.scrollTo(0,100);
    $(".about-u").on("click",function(){
        //alert(x); 
    })
});