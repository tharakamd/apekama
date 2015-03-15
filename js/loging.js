$(document).ready(function () {
    var times = 4000;
    var times2 = 1000;
    var times3 = 800;
    var times4 = 2000;
    var delay_time = 1400;
    var delay_2 = 350;
    $("#back_img").fadeIn(times);
    $("#buy_button").delay(delay_time).fadeIn(times4);
    $("#sell_button").delay(delay_time).fadeIn(times4);

    $("#buy_button").click(function () {
        $("#buyer_form").delay(delay_2).fadeIn(times2);
        $(".button_container").fadeOut(times3);
    });

    $(".close").click(function(){
		$(".bs-example").css("display","none");
	});
    
    function showAlert(){
        $(".bs-example").css("display","block");
    }
    
    $("#show_alert").click(function(){
        $(".bs-example").css("display","block");
    });
    
    $("#sell_button").click(function () {
        $("#seller_form").delay(delay_2).fadeIn(times2);
        $(".button_container").fadeOut(times3);
    });
    
    $("#show_main_menue_buyer, #show_main_menue_seller").click(function(){
        $(".main_form").fadeOut(times3);
        $(".button_container").delay(delay_2).fadeIn(times2);
    });
});




