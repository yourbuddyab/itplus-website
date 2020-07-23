$(function(){
    $('#service_call').click(function(){
        var category_id = $('#category_id').val();
        var products = $('#products').val();
        // var service = CKEDITOR.instances.editor1.getData();
        $.ajax({
            url:'/backend/services/insertService',
            type:'POST',
            data:{'category_id':category_id,'products':products},
            success:function(data)
            {
                if(data.status==200)
                {
                    alert(data.message);
                    $('#category_id').val(1);
                    $('#category').focus();
                    $('#products').val(' ');
                }
                else{
                    alert(data.message);
                    $('#category_id').val(1);
                    $('#category').focus();
                    $('#products').val(' ');
                    // $('#editor1').text(' ');
                }
            }
        })
    });

    $('#ser_update').click(function(){
        var categoryid = $('#categoryid').val();
        var serviceid = $('#serviceid').val();
        var products = $('#products').val();
        $.ajax({
            url:'/backend/services/updateservice',
            type:'POST',
            data:{'category_id':categoryid,'serviceid':serviceid,'products':products},
            success:function(data)
            {
                if(data.status==200)
                {
                    alert(data.message);
                    $('#category_id').val(1);
                    $('#products').val();
                    $('#category').focus();
                }
                else{
                    alert(data.message);
                }
            }
        })
    });
})
