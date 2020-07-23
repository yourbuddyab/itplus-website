@extends('frontend.layouts.app')
@section('content')
<style>
 .form-control::-webkit-input-placeholder { color: white; }
</style>
  <section class="ftco-section contact-section bg-light" style="background-color: #f7f7f7">
    <div class="container">
           <div class="row">
            @if(Session::has('success'))
            <script>alert('Data inserted successfully');</script>
            @endif
              <div class="col-lg-3 col-md-3 col-sm-12">
                 <div class="sidebar sidebar-left">
                    <div class="widget">
                       <div class="quote-item quote-border">
                          @if (!empty($fetchser))
                          <div class="quote-text-border">
                             <img src="{{URL::asset('/assets/image/products/'.$fetchser->image)}}" class="frontprod" alt="{{$fetchser->products}}"/>
                           </div>
                           <div class="quote-item-footer">
                              <h3 class="quote-author">{{$fetchser->products['products']}}</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              <div class="col-lg-8 col-md-8 col-sm-12">
                  <div class="content-inner-page">
                     {!! $fetchser->description !!}
                     <div class="gap-40"></div>
                  </div>
               </div>
           </div>
           <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="content-inner-page">
               <h3>Feature of {{$fetchser->products['products']}}</h3>
               {!! $fetchser->feature !!}
               <div class="gap-40"></div>
             </div>
            </div>
            <div class="col-md-4" style="margin-top: 7rem">
            <div id="page-slider" class="owl-carousel owl-theme page-slider small-bg">
                  @foreach ($data as $key => $item)
                  <div class="item" style="background-image:url({{URL::asset($item)}})">
                     <div class="container">
                        <div class="box-slider-content">
                           <div class="box-slider-text">
                              <h2 class="box-slide-title"></h2>
                           </div>
                        </div>
                     </div>
                  </div><!-- Item 1 end -->
                  @endforeach
               </div><!-- Page slider end-->
  
  
            </div><!-- Col end -->
         @endif
     </div>
    </div>
   </section>
    <section  style="background-image: url(../assets/image/bg/contactusbackground.jpg);background-attachment: fixed;">
           <div class="call-to-action classic" style="margin-bottom: 5rem">
               <div class="row">
                  <div class="col-md-12">
                     <div class="call-to-action-text text-center">
                        <h3 class="action-title">Interested with this service.</h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container"  >
               <div class="row mt-3">
                  <div class="col-md-12">
                     <form action="{{route('productorder')}}" class="bg-white p-5 contact-form" method="post">
                        @csrf
                        <div class="row block-12">
                            <div class="col-md-3 order-md-last d-flex">
                                <div class="form-group">
                                  <input type="text" class="form-control" style="color:#fff" placeholder="Your Name" name="name" id="name">
                                </div>
                            </div>
                                <div class="col-md-3 order-md-last d-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" style="color:#fff" placeholder="Your Email" name="email" id="email">
                                      </div>
                                </div>
                                <div class="col-md-3 order-md-last d-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" style="color:#fff" placeholder="Your mobile no." name="mobiles" id="mobile" required>
                                      </div>
                                </div>
                                <div class="col-md-3 order-md-last d-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" style="color:#fff" placeholder="Your Company name" name="cname" id="cname" required>
                                      </div>
                                </div>
                                </div>
                                <div class="row block-12">
                                <div class="col-md-12 order-md-last d-flex">
                                    <div class="form-group">
                                    <textarea name="bussiness" cols="30" rows="7" class="form-control" style="color:#fff" placeholder="Tell something about bussiness..." id="bussiness"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right">
                              <input type="submit" title="Send Message" class="btn btn-primary" id="sendmsg" value="Send Message">
                            </div>
                     </form>     
                     <hr/>
                    </div>
               </div>
            </div>
    </section>
@endsection
