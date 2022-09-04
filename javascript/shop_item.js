
function minus(){
    
    var value = $(".amount_num").val();
    if (value == 0) return;
        value--;
        $(".amount_num").val(value); 
}

function plus(){
    var value = $(".amount_num").val();
        value++;
        $(".amount_num").val(value);

}

function more_detail(){
    $('.item_detail i').toggleClass('bx-chevron-down');
    $('.item_detail i').toggleClass('bx-chevron-up');
    $('.info_list').toggleClass('display_toggle');
}

function more_review(){
    $('.item_review i').toggleClass('bx-chevron-down');
    $('.item_review i').toggleClass('bx-chevron-up');
    $('.review').toggleClass('display_toggle');
    $('.comment').toggleClass('display_toggle');
    
}






// $('.review').toggleClass('display_toggle');
// $('.comment').toggleClass('display_toggle');