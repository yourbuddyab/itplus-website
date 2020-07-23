$(function(){
    $('#sendmsg').on('click',function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
        var mobile = $('#mobile').val();
        if(name == '')
        {
            alert('Please fill name field to proceed');
            $('#name').focus();
        }
        else if(mobile == '')
        {
            alert('Please fill mobile no. field to proceed');
            $('#email').focus();
        }
        else{
        $.ajax({
            url:'url("/insertcontact")',
            type:'POST',
            data:{'name':name,'email':email,'subject':subject,'message':message,'mobile':mobile},
            success:function(data)
            {
                if(data.status==200)
                {
                    alert(data.message);
                    $('#name').val(' ');
                    $('#name').focus();
                    $('#mobile').val(' ');
                    $('#email').val(' ');
                    $('#subject').val(' ');
                    $('#message').val(' ');

                }
            }
        })
    }
    });
});
