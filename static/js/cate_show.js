$(function () {
    $('tbody').on('blur', 'input', function () {
        let type = this.dataset.type;
        let val = $(this).val();
        let cid = $(this).closest('tr').data('id');
        $.ajax({
            url: '/profect/index.php/catemanage/update',
            type: 'post',
            data: {cid, val, type},
            success: function (data) {
                if (data == 'success') {
                    alert('修改成功');
                } else if (data=='fail') {
                    alert('修改失败');
                }
            }
        });
    });
    $('button').on('click', function () {
        let cid = $(this).closest('tr').data('id');
        $(this).closest('tr').remove();
        $.ajax({
            url: '/profect/index.php/catemanage/delete',
            type: 'post',
            data: {cid},
            success: function (data) {
                if (data == 'ok') {
                    alert('删除成功');
                } else if (data == 'error') {
                    alert('删除失败');
                }
            }
        });
    })
});