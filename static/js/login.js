$(function () {
    $('label').on('click',function () {
        $(this).find('span').fadeToggle(500);
    });
    $('button').on('click',function (e) {
        e.preventDefault();
        let username=$('input:text');
        let password=$('input:password');
        let reg=$('.regChar>input');
        $.ajax({
            url:'/profect/index.php/login/check',
            type:'POST',
            data:{username:username.val(),password:password.val(),code:reg.val().toLowerCase()},
            success:function (data) {
                console.log(data);
                if(data=='success'){
                    location.href='/profect/index.php/catemanage/index';
                }else if(data=='psderror'){
                    alert('密码错误！请重新输入密码');
                }else if(data=='usernameerror'){
                    alert('账号输入有误！');
                }else if(data=='regerror'){
                    alert('验证码输入有误')
                }
            }
        })
    })
});