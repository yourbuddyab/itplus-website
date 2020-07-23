$(function(){
    $('#about_call').click(function(){
        var about = CKEDITOR.instances.editor.getData();
        $.ajax({
            url:'/backend/about/insertAbout',
            type:'POST',
            data:{'about':about},
            success:function(data)
            {
                if(data.status==200)
                {
                    alert(data.message);
                    $('#category_id').val(1);
                    $('#category').focus();
                    $('#editor1').text(' ');
                }
                else{
                    alert(data.message);
                    $('#category_id').val(1);
                    $('#category').focus();
                    $('#editor1').text(' ');
                }
            }
        })
    });
    $('#about_update').click(function(){
        var about = CKEDITOR.instances.editor.getData();
        var aboutid = $('#aboutid').val();
        $.ajax({
            url:'/backend/about/updatecontent',
            type:'POST',
            data:{'about':about,'aboutid':aboutid},
            success:function(data)
            {
                if(data.status==200)
                {
                    alert(data.message);
                    $('#category_id').val(1);
                    $('#category').focus();
                    $('#editor1').text(' ');
                }

            }
        })
    });
});
