$(function () {
    $('.del').on('click',function () {
        let aid=$(this).closest('.adr-list').data('id');
        console.log(aid);
        let that=$(this);
        if (confirm('确认删除这条地址信息么？')){
            $.ajax({
                url:'/profect/index.php/my/deleteAdr',
                data:{aid},
                success:function (data) {
                    if (data==1){
                        that.closest('.adr-list').remove();
                    }
                }
            });
        }

    });
});