window.onload = function () {

    $('.go-online-button').on('click', function(){

        var answer = $(this).data('answer');

        $('input[name="answer"]').val(answer);
        $('.go-online-form').trigger('submit');
    });

    $(".terms-link").on("click", function(){
        $(".offer-wrapper").hide();
        $(".terms_offer-wrapper").removeClass("hidden");
        return false;
    });

    $(".terms-back-link").on("click", function(){
        $(".terms_offer-wrapper").addClass("hidden");
        $(".offer-wrapper").show();
        return false;
    });

};








/*
var x = document.createElement('script');
x.src = 'js/modernizr-custom.js';
document.getElementsByTagName("head")[0].appendChild(x);

var cfb = "Test";
if (Modernizr.localstorage) {
    document.body.innerHTML = "";

}*/
