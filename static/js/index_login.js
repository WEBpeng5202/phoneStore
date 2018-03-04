$(function () {
    $('input:button').on('click',function () {
        let data=$('form').serialize();
        $.ajax({
            url:'/profect/index.php/reg/reg',
            type:'post',
            data:data,
            success:function (data) {
                console.log(data);
                if (data=='error'){
                    alert('账号有误，请确认后重新登录！');
                }else  if (data=='密码错误'){
                    alert('密码错误！');
                }else  if (data=='success'){
                    alert('登录成功！');
                    location.href='/profect/index.php/reg/my';
                }
            }
        });

    })

});