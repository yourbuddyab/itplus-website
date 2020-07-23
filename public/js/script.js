$(function() {
    $('table tbody tr').each(function(){
        $(this).find('#category').click(function(){
            var category = $(this).data('cat');
            if(category)
            {
                var x= confirm('Are you sure you want to delete the category??');
                if (x) {
                        $.ajax({
                                url:'/backend/category/deletecategory',
                                type:'GET',
                                data:{'category':category},
                                success:function(data)
                                {
                                    if(data.status==200)
                                    {
                                        alert(data.message);
                                        window.location.reload();
                                    }
                                }
                            })
                }
            }
        });

    });
    $('table tbody tr').each(function(){
        $(this).find('#service').click(function(){
            var service = $(this).data('ser');
            if(service)
            {
                // var url = '{{ route("deleteservice") }}';
                var x= confirm('Are you sure you want to delete the service??');
                if (x) {
                        $.ajax({
                                url:'{{ url('/backend/services/deleteservice/') }}' + service,
                                // url:"{{url('backend/services/deleteservice')}}",
                                // url:"route('deleteservice')",
                                type:'GET',
                                data:{'service':service},
                                success:function(data)
                                {
                                    if(data.status==200)
                                    {
                                        alert(data.message);
                                        window.location.reload();
                                    }
                                }
                            })
                }
            }
        });

    });
    $('table tbody tr').each(function(){
        $(this).find('#product').click(function(){
            var product = $(this).data('pro');
            if(product)
            {
                var x= confirm('Are you sure you want to delete the product??');
                if (x) {
                        $.ajax({
                                url:'/backend/products/deleteproduct',
                                type:'GET',
                                data:{'product':product},
                                success:function(data)
                                {
                                    if(data.status==200)
                                    {
                                        alert(data.message);
                                        window.location.reload();
                                    }
                                }
                            })
                }
            }
        });

    });
    $('table tbody tr').each(function(){
        $(this).find('#portfolio').click(function(){
            var portfolio = $(this).data('port');
            if(portfolio)
            {
                var x= confirm('Are you sure you want to delete the portfolio??');
                if (x) {
                        $.ajax({
                                url:'/backend/portfolio/deleteportfolio',
                                type:'GET',
                                data:{'portfolio':portfolio},
                                success:function(data)
                                {
                                    if(data.status==200)
                                    {
                                        alert(data.message);
                                        window.location.reload();
                                    }
                                }
                            })
                }
            }
        });

    });
    $('table tbody tr').each(function(){
        $(this).find('#testimonial').click(function(){
            var testimonial = $(this).data('test');
            if(testimonial)
            {
                var x= confirm('Are you sure you want to delete the testimonial??');
                if (x) {
                        $.ajax({
                                url:'/backend/testimonial/deletetest',
                                type:'GET',
                                data:{'testimonial':testimonial},
                                success:function(data)
                                {
                                    if(data.status==200)
                                    {
                                        alert(data.message);
                                        window.location.reload();
                                    }
                                }
                            })
                }
            }
        });

    });
    $('table tbody tr').each(function(){
        $(this).find('#team').click(function(){
            var team = $(this).data('team');
            if(team)
            {
                var x= confirm('Are you sure you want to delete the team??');
                if (x) {
                        $.ajax({
                                url:'/backend/team/deleteteam',
                                type:'GET',
                                data:{'team':team},
                                success:function(data)
                                {
                                    if(data.status==200)
                                    {
                                        alert(data.message);
                                        window.location.reload();
                                    }
                                }
                            })
                }
            }
        });

    });
    $('table tbody tr').each(function(){
        $(this).find('#slider').click(function(){
            var slider = $(this).data('slider');
            if(slider)
            {
                var x= confirm('Are you sure you want to delete the slider??');
                if (x) {
                        $.ajax({
                                url:'/backend/slider/deleteslider',
                                type:'GET',
                                data:{'slider':slider},
                                success:function(data)
                                {
                                    if(data.status==200)
                                    {
                                        alert(data.message);
                                        window.location.reload();
                                    }
                                }
                            })
                }
            }
        });

    });
    $('table tbody tr').each(function(){
        $(this).find('#contact').click(function(){
            var contact = $(this).data('contact');
            if(contact)
            {
                var x= confirm('Are you sure you want to delete the contact??');
                if (x) {
                        $.ajax({
                                url:'/backend/contact/deletecontact',
                                type:'GET',
                                data:{'contact':contact},
                                success:function(data)
                                {
                                    if(data.status==200)
                                    {
                                        alert(data.message);
                                        window.location.reload();
                                    }
                                }
                            })
                }
            }
        });

    });
    // $('table tbody tr').each(function(){
    //     $(this).find('#about').click(function(){
    //         var about = $(this).data('about');
    //         if(about)
    //         {
    //             var x= confirm('Are you sure you want to delete the content??');
    //             if (x) {
    //                     $.ajax({
    //                             url:'/backend/about/deleteabout',
    //                             type:'GET',
    //                             data:{'about':about},
    //                             success:function(data)
    //                             {
    //                                 if(data.status==200)
    //                                 {
    //                                     alert(data.message);
    //                                     window.location.reload();
    //                                 }
    //                             }
    //                         })
    //             }
    //         }
    //     });

    // });
});
