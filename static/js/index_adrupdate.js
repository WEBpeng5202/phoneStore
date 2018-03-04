$(function () {
    let updateBtn=$('.adr-add');
    updateBtn.on('click',function () {
        let formDate=$('form').serialize();
        $.ajax({
            url:'/profect/index.php/my/sqlUpdate',
            data:formDate,
            success:function (data) {
                if (data==1){
                    location.href='/profect/index.php/my/setAdr';
                }
            }
        });
    });
});