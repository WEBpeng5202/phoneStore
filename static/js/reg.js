$(function () {
   $(':button').on('click',function () {
       let formeData=$('form').serialize();
       $.ajax({
           url:'/profect/index.php/reg',
           data:formeData,
           type:'post',
           success:function (data) {
               if(data=='ok'){
                   location.href='/profect/index.php/reg/loginShow'
               }else if(data=='error'){
                   alert('注册失败')
               }
           }
       })
   })
});