$(document).ready(function(){
    function myAlert(){
        $(".alert").show(1000);
    }
    $(window).on("load",myAlert());
});