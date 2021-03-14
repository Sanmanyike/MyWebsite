//Runs after the page has loaded
$(document).ready(function(){
    //Show alert box and profile picture
    $(window).on("load",function(){
        $(".alert").show(1000);
        $(".profilepic").show(1500);
    });
    //Increase the thickness of jumbotron lines
    $(window).on("load",function(){
        $(".jumbotron-hr").animate({height: "50px"},2000)
    });
    //showing the about and services section
    if($(window).scrollTop()>960){
        $(window).on("scroll",function(){
            $(".about-card").show(1000);
        });
    }
});