$(function() {
    $('#contact_call').click(function(){
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var address = $('#address').val();
        var website = $('#website').val();
        $.ajax({
            url:'/backend/contact/insertContact',
            type:'POST',
            data:{'email':email,'mobile':mobile,'address':address,'website':website},
            success:function(data)
            {
                if(data.status==200)
                {
                    alert(data.message);
                    $('#email').val(' ');
                    $('#email').focus();
                    $('#mobile').val(' ');
                    $('#address').val(' ');
                    $('#website').val(' ');
                }
                else{
                    alert(data.message);
                    $('#email').val(' ');
                    $('#email').focus();
                    $('#mobile').val(' ');
                    $('#address').val(' ');
                    $('#website').val(' ');
                }
            }
        })
    });

    $('#update_call').click(function(){
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var address = $('#address').val();
        var conid = $('#conid').val();
        var website = $('#website').val();
        $.ajax({
            url:'/backend/contact/updateContact',
            type:'POST',
            data:{'email':email,'mobile':mobile,'address':address,'conid':conid,'website':website},
            success:function(data)
            {
                if(data.status==200)
                {
                    alert(data.message);
                }
            }
        })
    });

});
