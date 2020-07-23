@extends('frontend.layouts.app')
@section('content')


 <section id="main-container" class="main-container">
    <div class="container">
       <div class="row">
          @if (!empty($fetchabout))
          <div class="col-md-6">{!! $fetchabout->about !!}</div>

          <div class="col-md-6">

             <div id="page-slider" class="owl-carousel owl-theme page-slider small-bg">
                @foreach ($fetchslider as $item)
                <div class="item" style="background-image:url({{URL::asset('/assets/image/slider/'.$item->image)}})">
                   <div class="container">
                      <div class="box-slider-content">
                         <div class="box-slider-text">
                            <h2 class="box-slide-title">{!! $item->title !!}</h2>
                         </div>
                      </div>
                   </div>
                </div><!-- Item 1 end -->
                @endforeach
             </div><!-- Page slider end-->


          </div><!-- Col end -->
          
          @endif
       </div><!-- Content row end -->

    </div><!-- Container end -->
 </section><!-- Main container end -->

 <section id="facts" class="facts-area dark-bg">
    <div class="container">
        <div class="row">
            <div class="facts-wrapper">
                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{URL::asset('/assets/image/icon-image/fact1.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                        <h3 class="ts-facts-title">Total Projects</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{URL::asset('/assets/image/icon-image/fact2.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                        <h3 class="ts-facts-title">Staff Members</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{URL::asset('/assets/image/icon-image/fact3.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                        <h3 class="ts-facts-title">Hours of Work</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{URL::asset('/assets/image/icon-image/fact4.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                        <h3 class="ts-facts-title">Countries Experience</h3>
                    </div>
                </div><!-- Col end -->

            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Facts end -->


 <section id="ts-team" class="ts-team">
    <div class="container">
       <div class="row text-center">
          <h2 class="section-title">Quality Service</h2>
          <h3 class="section-sub-title">Professional Team</h3>
       </div><!--/ Title row end -->

       <div class="row">

          <div id="team-slide" class="owl-carousel owl-theme team-slide">
              @foreach ($fetchtest as $item)
              <div class="item">
                <div class="ts-team-wrapper">
                   <div class="team-img-wrapper">
                      <img alt="" src="{{URL::asset('/assets/image/team/'.$item->pimage)}}" class="img-responsive frontabtteam">
                   </div>
                   <div class="ts-team-content">
                      <h3 class="ts-name">{{$item->name}}</h3>
                      <p class="ts-designation">{{$item->designation}}</p>
                      <p class="ts-description"></p>
                      <div class="team-social-icons">
                         <a target="_blank" href="https://www.facebook.com/ITPLUSBIKANER/"><i class="fa fa-facebook"></i></a>
                         <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                         <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                         <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                   </div>
                </div><!--/ Team wrapper end -->
             </div><!-- Team 1 end -->
              @endforeach




          </div><!-- Team slide end -->

       </div><!--/ Content row end -->
    </div><!--/ Container end -->
 </section><!--/ Team end -->
@endsection
