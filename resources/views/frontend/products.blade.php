@extends('frontend.layouts.app')
@section('content')

  <section class="ftco-section contact-section bg-light">
    <div class="container">
           <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12">
                 <div class="sidebar sidebar-left">

                    <div class="widget">
                       <div class="quote-item quote-border">
                          <div class="quote-text-border">
                            <img src="{{URL::asset('/assets/image/products/'.$fetchproduct->image)}}" class="frontprod"/>
                          </div>

                          <div class="quote-item-footer">
                          <h3 class="quote-author">{{$fetchproduct->products['products']}}</h3>
                          </div>
                      </div>
                    </div>
                 </div>
              </div>

              <div class="col-lg-8 col-md-8 col-sm-12">
                 <div class="content-inner-page">{!! $fetchproduct->description !!}
                    <div class="gap-40"></div>
                 </div>
              </div>


           </div><!-- Main row end -->
           @if(Session::has('success'))
            <script>alert('Data inserted successfully');</script>
            @endif
      <form action="{{route('productorder')}}" class="bg-white p-5 contact-form" method="post">
        @csrf
        <div class="row block-12">
            <div class="col-md-3 order-md-last d-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name" name="name" id="name">
                </div>
            </div>
                <div class="col-md-3 order-md-last d-flex">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" name="email" id="email">
                      </div>
                </div>
                <div class="col-md-3 order-md-last d-flex">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Your mobile no." name="mobiles" id="mobile" required>
                      </div>
                </div>
                <div class="col-md-3 order-md-last d-flex">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Company name" name="cname" id="cname" required>
                      </div>
                </div>
                </div>
                <div class="row block-12">
                <div class="col-md-12 order-md-last d-flex">
                    <div class="form-group">
                    <textarea name="bussiness" cols="30" rows="7" class="form-control" placeholder="Tell something about bussiness..." id="bussiness"></textarea>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <input type="submit" title="Send Message" class="btn btn-primary" id="sendmsg" value="Send Message">
                  {{-- <input type="button" value="Send Message" class="btn btn-primary py-3 px-5" id="sendmsg"> --}}
                </div>



        </form>


      <hr/>

    </div>
  </section>
  {{-- <script src="{{URL::asset('js/frontcon_script.js')}}"></script> --}}
@endsection
