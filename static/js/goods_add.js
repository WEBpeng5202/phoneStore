$(function () {
    ///////////////缩略图上传/////////////
    let thumbHidden=$('.thumb-hidden');
    $('#exampleInputThumb').on('change',function () {
        let file=this.files[0];
        let reader=new FileReader();
        reader.readAsDataURL(file);
        reader.onload=function (e) {
            $('<img>').attr('src',e.target.result).addClass('img-thumbnail').css({display:'block',width:'50%'}).appendTo('.thumb');
        };
        let formData = new FormData();
        formData.append('file', file);
        $.ajax({
            url:'/profect/index.php/upload/index',
            type:'post',
            data:formData,
            processData:false,
            contentType:false,
            success:function (data) {
                thumbHidden.attr('value',data);
            }
        })
    });
    //////////////多图上传///////////////
    $('#exampleInputImage').on('change',function () {
        if ($('.image>.img-thumbnail').length!=0){
            $('.image>.img-thumbnail').remove();
        }
        let files=this.files;
        let str='';
        let gimage=$('.gimage-hidden');
        for (let i=0;i<files.length;i++){
            let reader=new FileReader();
            reader.readAsDataURL(files[i]);
            reader.onload=function (e) {
                    $('<img>').attr('src',e.target.result).addClass('img-thumbnail').css({
                        display:'block',width:'calc(100% / '+files.length+')',maxHeight:'100px',
                    }).appendTo('.image');
            };
            let formData=new FormData();
            formData.append('file',files[i]);
            $.ajax({
                url:'/profect/index.php/upload/index',
                type:'post',
                data:formData,
                processData:false,
                contentType:false,
                success:function (data) {
                    str+=data+',';
                    if (i=files.length-1){
                        let url=str.slice(0,-1);
                        gimage.attr('value',url);
                    }

                }
            });
        }
    });
    let ue = UE.getEditor('container', {
        toolbars: [
            ['fullscreen',
                'source',
                'undo',
                'redo',
                'bold',
                'simpleupload', //单图上传
                'insertimage', //多图上传
                'justifyleft', //居左对齐
                'justifyright', //居右对齐
                'justifycenter', //居中对齐
                'justifyjustify', //两端对齐
                'forecolor', //字体颜色
                'imagecenter', //居中
                'template', //模板
                'edittip ', //编辑提示
            ]
        ]
    });
    $('button').on('click',function (e) {
        e.preventDefault();
        let content=ue.getContent();
        $('.gcontent').attr('value',content);
        let formData=$('form').serialize();
        $.ajax({
            url:'/profect/index.php/goods/add',
            type:'post',
            data:formData,
            dataType:'json',
            success:function (data) {
                if (data=='ok'){
                    alert('上传成功！');
                    location.href='/profect/index.php/goods/show';
                }else if (data=='error'){
                    alert('上传失败！');
                }
            }
        })
    })
});