$(function () {
    let other=$('.other-pay');
    let te=true;
    other.on('click',function () {
        if (te){
            $(this).prevAll('.pay-toggle').slideUp(function () {
                te=false;
                $('.other-pay>p').removeClass('active').addClass('hot');
            });
        }else {
            $(this).prevAll('.pay-toggle').slideDown(function () {
                te=true;
                $('.other-pay>p').removeClass('hot').addClass('active');
            });
        }
        if (te){
            $(this).find('#tg-text').text('使用其他支付方式 ');
        }else {
            $(this).find('#tg-text').text('收起其他支付方式 ');
        }

   });
    getTotal();
    function getTotal() {
        let checks = $('.goods>ul>li');
        let totalNumber=0,totalPrice=0;
        $.each(checks, function (index, value) {
            let gid = $(value).closest('.goods').data('gid');
            let num = $(value).find('.g-num>span').text()*1;
            let price = $(value).find('.g-price>span').text()*1;
            totalNumber += num;
            totalPrice+=num*price;
        });
        $('.totalNumber').text(totalNumber);
        totalPrice=totalPrice.toFixed(2);
        $('.totalPrice').text(totalPrice);
    }
});