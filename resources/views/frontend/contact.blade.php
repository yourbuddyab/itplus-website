@extends('frontend.layouts.app')
@section('content')

<section id="main-container" class="main-container" style="background-image: url(../assets/image/bg/contactusbackground.jpg);background-attachment: fixed;">
    <div class="container">

       <div class="row text-center">
          <h2 class="section-title" style="color: #fff">Reaching our Office</h2>
          <h3 class="section-sub-title" style="color: #fff">Find Our Location</h3>
       </div><!--/ Title row end -->

       <div class="row">
          @if (!empty($fetchcon))
          <div class="col-md-4">
             <div class="ts-service-box-bg text-center" style="margin: 1%; padding:10px">
                <span class="ts-service-icon icon-round">
                   <i class="fa fa-map-marker"></i>
                </span>
                <div class="ts-service-box-content">
                   <h4>Visit Our Office</h4>
                   <p>{{$fetchcon->address}}</p>
               </div>
             </div>
             <div class="ts-service-box-bg text-center" style="margin: 1%; padding:10px">
               <span class="ts-service-icon icon-round">
                  <i class="fa fa-envelope"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Email Us</h4>
                  <p>{{$fetchcon->email}}</p>
              </div>
            </div>
            <div class="ts-service-box-bg text-center" style="margin: 1%; padding:10px">
               <span class="ts-service-icon icon-round">
                  <i class="fa fa-phone-square"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Call Us</h4>
                  <p>{{$fetchcon->mobile}}</p>
              </div>
            </div>
          </div><!-- Col 1 end -->
          @endif
          <div class="col-md-8">
            <h3 class="column-title" style="color: #fff">We love to hear</h3>
            @if(Session::has('success'))
            <script>alert('Data inserted successfully');</script>
            @endif
            <form action="{{route('insertcont')}}" method="post" role="form">
               <div class="error-container"></div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label style="color: #fff">Name</label>
                     <input class="form-control form-control-name" style="color: #fff" name="name" id="name" placeholder="" type="text" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label style="color: #fff">Email</label>
                        <input class="form-control form-control-email" style="color: #fff"  name="email" id="email"
                        placeholder="" type="email" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                   <div class="form-group">
                      <label style="color: #fff">Mobile</label>
                      <input class="form-control form-control-mobiles" style="color: #fff"  name="mobiles" id="mobiles" placeholder="" type="text" required>
                   </div>
                </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label style="color: #fff">Subject</label>
                        <input class="form-control form-control-subject" style="color: #fff"  name="subject" id="subject"
                        placeholder="" required>
                     </div>
                  </div>
                  {{-- <div class="col-md-12">
                     <div class="form-group">
                        <label style="color: #fff">Organization Name</label>
                        <input class="form-control form-control-subject" style="color: #fff"  name="organization" id="organization"
                        placeholder="" required>
                     </div>
                  </div> --}}
               </div>
               <div class="form-group">
                  <label style="color: #fff">Message</label>
                  <textarea class="form-control form-control-message" style="color: #fff"  name="message" id="message" placeholder="" rows="10" required></textarea>
               </div>
               <div class="text-right"><br>
                  <input class="btn btn-primary solid blank" type="submit" value="Send Message">
               </div>
            </form>
         </div>

{{-- 
          <div class="col-md-4">
           
          </div><!-- Col 2 end -->

          <div class="col-md-4">
             
          </div><!-- Col 3 end --> --}}

       </div><!-- 1st row end -->

       <div class="gap-60"></div>

       <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2490.78060998347!2d73.28394618924366!3d28.00932084131795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393fdd56324b9d53%3A0x96a400b0133d5b56!2sKarmisar%20Rd%2C%20Murlidhar%20Vyas%20Colony%2C%20Bikaner%2C%20Rajasthan%20334001!5e0!3m2!1sen!2sin!4v1579952170653!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
       </div>

       <div class="gap-40"></div>

       <div class="row">

       </div><!-- Content row -->
    </div><!-- Conatiner end -->
 </section><!-- Main container end -->
@endsection
