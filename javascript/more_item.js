function more_item(){
    $('.lds-default').css('display','inline-block');
    $('.more button').css('display','none');


    setTimeout(function() {
        $('.shop_card').css('display','block');
        $('.lds-default').css('display','none');
        $('.more button').css('display','block');
     },1000);
    
}