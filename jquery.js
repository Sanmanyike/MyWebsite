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
    //Skillset bar loading
    $(".skills").hover(function(){
        $(".html-bar").animate({
            width: "80%"
        },1000);
        $(".css-bar").animate({
            width: "68%"
        },1100);
        $(".bootstrap-bar").animate({
            width: "60%"
        },1200);
        $(".javascript-bar").animate({
            width: "55%"
        },1300);
        $(".jquery-bar").animate({
            width: "50%"
        },1400);
        $(".php-bar").animate({
            width: "75%"
        },1500);
        $(".wordpress-bar").animate({
            width: "0%"
        },1600);
        $(".xml-bar").animate({
            width: "0%"
        },1700);
        $(".json-bar").animate({
            width: "0%"
        },1800);
        $(".restapi-bar").animate({
            width: "0%"
        },1900);
        $(".vue-bar").animate({
            width: "0%"
        },2000);
        $(".c-bar").animate({
            width: "10%"
        },2100);

    });
});