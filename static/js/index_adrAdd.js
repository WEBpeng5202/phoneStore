$(function () {
    let btn = $('.adr-city');
    let adrBtn = $('.adr-content>dl');
    let adrStr = '';
    // btn.find('input').on('focus',function () {
    //     $(this).val('');
    // });
    btn.on('click', function (e) {
        e.preventDefault();
        $(this).next('.adr-select').slideToggle();
        btn.find('input').val('');
    });
    adrBtn.on('click', 'dd', function () {
        adrStr=$(this).text();
        $('#city').val(function (i,v) {
            v+=adrStr+' / ';
            return v;
        });
        if ($(this).closest('dl').hasClass('adr-last')) {
            $('.adr-select').slideToggle();
            $(this).closest('.adr-content').find('dl').removeClass('adr-c-active').eq(0).addClass('adr-c-active');
            $(this).addClass('active').closest('dl').find('dd').removeClass('active');
        } else {
            $(this).closest('.adr-content').find('dl').removeClass('adr-c-active');
            $(this).closest('dl').delay(500).next('dl').addClass('adr-c-active');
        }
    });
    let fid=$('input:hidden').val();
    $('.adr-add').on('click',function () {
        let data=$('form').serialize();
        $.ajax({
            type:'post',
            url:'/profect/index.php/my/add',
            data:data,
            success:function (data) {
                if (data==1){
                    location.href='/profect/index.php/my/Adr?fid='+fid;
                }
            }
        });
    });
});