$(function () {
    let add=$('.add');
    let gid=location.search.split('=')[1];
    add.on('click',function () {
        $.ajax({
            url:'/profect/index.php/index_shop/add',
            data:{gid},
            type:'post',
            success:function (data) {
                if(data==1){
                    alert('已添加到购物车');
                }
            }
        })
    });
});