$(function () {
    getTotal();
    let goods = $('.number');
    let tr, ta;
    let del = $('.del');
    ///////////商品数量 减
    goods.on('click', '.input-sub', function () {
        let gid = $(this).closest('.goods').data('gid');
        let num = $(this).next().find('input:text').val(function (index, value) {
            if (value * 1 >= 1) {
                return value * 1 - 1;
            } else if (value * 1 <= 0) {
                return value;
            }
        }).val() * 1;
        clearTimeout(tr);
        tr = setTimeout(function () {
            $.ajax({
                url: '/profect/index.php/index_shop/reduceGoods',
                data: {number: num, gid},
                success: function (data) {
                    console.log(data);
                    getTotal();
                }
            });
        }, 400)
    });
    ///////////商品数量 加
    goods.on('click', '.input-add', function () {
        let gid = $(this).closest('.goods').data('gid');
        let num = $(this).prev().find('input:text').val(function (index, value) {
            return value * 1 + 1;
        }).val() * 1;
        clearTimeout(ta);
        ta = setTimeout(function () {
            $.ajax({
                url: '/profect/index.php/index_shop/reduceGoods',
                data: {number: num, gid},
                success: function (data) {
                    console.log(data);
                    getTotal();
                }
            });
        }, 400)
    });
    ///////////商品 删除
    del.on('click', function () {
        alert('确定要删除这件商品么？');
        let gid = $(this).closest('.goods').data('gid');
        let that = $(this);
        $.ajax({
            url: '/profect/index.php/index_shop/deleteGoods',
            data: {gid},
            success: function (data) {
                if (data == 1) {
                    that.closest("li").remove();
                }
            }
        });

    });
    //////////商品 勾选
    $(':checked').on('click',function () {
        getTotal();
    });
    ///////// 商品结算
    $('.buy').on('click',function () {
        let checks=$(':checked');
        let arr=[];
        $.each(checks,function (index,element) {
            let gid = $(element).closest('.goods').data('gid');
            let num = $(element).closest('.goods').find('.input-num>input').val()*1;
            arr.push({gid,num});
        });
        $.ajax({
            url:'/profect/index.php/index_order/add',
            data:{data:arr},
            success:function (data) {
                location.href='/profect/index.php/index_order/addList?fid='+data;
            }
        });

    });
    function getTotal() {
        let checks = $(':checked');
        let totalNumber=0,totalPrice=0;
        $.each(checks, function (index, value) {
            let gid = $(value).closest('.goods').data('gid');
            let num = $(value).closest('.goods').find('.input-num>input').val()*1;
            let price = $(value).closest('.goods').find('.price>span').text()*1;
            totalNumber += num;
            totalPrice+=num*price;
        });
        $('.totalNumber').text(totalNumber);
        $('.totalPrice').text(totalPrice);
    }
});