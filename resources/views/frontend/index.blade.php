@extends('frontend.layouts.app')
@section('content')
		<div id="main-slide" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
                @foreach ($fetchslider as $key => $item)
                <ol class="carousel-indicators visible-lg visible-md">
                <li data-target="#main-slide" data-slide-to="{{$key}}" class="active"></li>
                </ol>
				<div class="item @if($key == 0) {{ 'active' }} @endif" style="background-image:url({{URL::asset('/assets/image/slider/'.$item->image)}})">
					<div class="slider-content text-left">
						<div class="col-md-12">
                            <h2 class="slide-title animated2">{{$item->title}}</h2>
							<h3 class="slide-title animated3">{!! $item->description !!}</h3>
						</div>
					</div>
				</div>
                @endforeach
			</div>


			<a class="left carousel-control" href="#main-slide" data-slide="prev">
				<span><i class="fa fa-angle-left"></i></span>
			</a>
			<a class="right carousel-control" href="#main-slide" data-slide="next">
				<span><i class="fa fa-angle-right"></i></span>
			</a>
		</div>

		<section class="call-to-action-box no-padding">
			<div class="container">
				<div class="action-style-box">
					<div class="row">
						<div class="col-md-8">
							<div class="call-to-action-text">
								<h3 class="action-title">We understand your needs</h3>
							</div>
						</div>
						<div class="col-md-4">
							<div class="call-to-action-btn">
								<a class="btn btn-dark" href="{{url('/contact')}}">Request Quote</a>
								<a class="btn btn-dark" href="whatsapp://send?text=Hello World!&phone=+918823908641" style="background: #25d366"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <!-- services -->
        <section id="project-area" class="project-area solid-bg">
			<div class="container">
				<div class="row text-center">
					<h3 class="section-sub-title">Services</h3>
                </div>
                <div class="row">
                    @foreach ($fetchcat as $item)
                      <div class="col-md-3">
                         <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <a href="{{ url('allservices/'.$item->category_id) }}">
                               <img class="img-responsive frontind1" src="{{URL::asset('/assets/image/services/'.$item->image)}}" alt="{{$item->category}}">
                                </a>
                            </div>
                            <div class="">
                            <h3 class="service-box-title text-center"><a href="{{ url('services/'.$item->category_id) }}">{{$item->category}}</a></h3>
                            </div>
                         </div>
                      </div>
                      @endforeach
                      <div class="gap-30"></div>
                   </div>
			</div>
        </section>

        <!-- about -->
		<section id="ts-features" class="ts-features bg-info">
			<div class="container">
                <div class="row text-center">
					<h3 class="section-sub-title">About Us</h3>
                </div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="ts-intro">
							@if (!empty($fetchabt))
                            	{!!  Str::limit($fetchabt->about, 500) !!}
							@endif
                        </div>
                        <a class="learn-more frontindabt btn btn-primary" href="{{ url('/about') }}"> continue...</a>

						<div class="gap-20"></div>

					</div>
				</div>
			</div>
		</section>

        <!-- project counts -->
		{{-- <section id="facts" class="facts-area dark-bg">
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
						</div>

						<div class="col-sm-3 ts-facts">
							<div class="ts-facts-img">
								<img src="{{URL::asset('/assets/image/icon-image/fact2.png')}}" alt="" />
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
								<h3 class="ts-facts-title">Staff Members</h3>
							</div>
						</div>

						<div class="col-sm-3 ts-facts">
							<div class="ts-facts-img">
								<img src="{{URL::asset('/assets/image/icon-image/fact3.png')}}" alt="" />
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
								<h3 class="ts-facts-title">Hours of Work</h3>
							</div>
						</div>

						<div class="col-sm-3 ts-facts">
							<div class="ts-facts-img">
								<img src="{{URL::asset('/assets/image/icon-image/fact4.png')}}" alt="" />
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
								<h3 class="ts-facts-title">Countries Experience</h3>
							</div>
						</div>

					</div>
				</div>

			</div>

		</section> --}}

        <!-- portfolio -->
		<section id="project-area" class="project-area solid-bg">
			<div class="container">
				<div class="row text-center">
					<h2 class="section-title">Work of Excellence</h2>
					<h3 class="section-sub-title">Our Portfolio</h3>
				</div>


				<div class="row">
					<div class="isotope-nav" data-isotope-nav="isotope">
						<ul>
                            <li><a href="#" class="active" data-filter="*">Show All</a></li>
                            <li><a href="#" data-filter=".app">App</a></li>
                            <li><a href="#" data-filter=".graphics">Graphics</a></li>
                            <li><a href="#" data-filter=".web">Web</a></li>
						</ul>
					</div>


                    <div id="isotope" class="isotope">
                        @foreach ($fetchport as $item)
                        @php
                        switch ($item->port_category) {
                            case '1':
                                $itemcat = 'App';
                                break;
                            case '2':
                                $itemcat = 'Graphics';
                                break;
                            case '3':
                                $itemcat = 'Web';
                                break;

                        }
                                    @endphp
                                    @if($item->port_category == 1)
                                            <div class="col-md-4 col-sm-6 col-xs-12 app isotope-item">
                                                <div class="isotope-img-container">
                                                <a class="gallery-popup frontind1" href="{{URL::asset('/assets/image/portfolio/'.$item->image)}}">
                                                    <img class="img-responsive frontind1" src="{{URL::asset('/assets/image/portfolio/'.$item->image)}}" alt="{{$item->category}}">
                                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                                </a>
                                                <div class="project-item-info">
                                                    <div class="project-item-info-content">
                                                        <h3 class="project-item-title">
                                                        <a href="#">{{$item->title}}</a>
                                                        </h3>
                                                        <p class="project-cat">{{$itemcat}}</p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                    @endif
                                    @if($item->port_category == 2)
                                    <div class="col-md-4 col-sm-6 col-xs-12 graphics isotope-item">
                                    <div class="isotope-img-container">
                                        <a class="gallery-popup frontind1" href="{{URL::asset('/assets/image/portfolio/'.$item->image)}}">
                                            <img class="img-responsive frontind1" src="{{URL::asset('/assets/image/portfolio/'.$item->image)}}" alt="{{$item->category}}">
                                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                        </a>
                                        <div class="project-item-info">
                                            <div class="project-item-info-content">
                                                <h3 class="project-item-title">
                                                <a href="#">{{$item->title}}</a>
                                                </h3>
                                                <p class="project-cat">{{$itemcat}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endif
                                    @if($item->port_category == 3)
                                    <div class="col-md-4 col-sm-6 col-xs-12 web isotope-item">
                                    <div class="isotope-img-container">
                                        <a class="gallery-popup frontind1" href="{{URL::asset('/assets/image/portfolio/'.$item->image)}}">
                                            <img class="img-responsive frontind1" src="{{URL::asset('/assets/image/portfolio/'.$item->image)}}" alt="{{$item->category}}">
                                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                        </a>
                                        <div class="project-item-info">
                                            <div class="project-item-info-content">
                                                <h3 class="project-item-title">
                                                <a href="#">{{$item->title}}</a>
                                                </h3>
                                                <p class="project-cat">{{$itemcat}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endif
                             @endforeach


                          </div>

					<div class="general-btn text-center">
                    <a class="btn btn-primary" href="{{url('/portfolio')}}">View All Projects</a>
					</div>

				</div>
			</div>

		</section>

        <!-- testimonial -->
	 {{-- <section class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="column-title">Testimonials</h3>
						<div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
                            @foreach ($fetchtest as $item)
                            <div class="item">
								<div class="quote-item">
									<span class="quote-text">
										{!! $item->description !!}
									</span>

									<div class="quote-item-footer">
                                    <img class="testimonial-thumb" src="{{URL::asset('/assets/image/testimonial/'.$item->pimage)}}" alt="testimonial">
										<div class="quote-item-info">
                                        <h3 class="quote-author">{{$item->name}}</h3>
											<span class="quote-subtext">{{$item->designation}}</span>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
						</div>
					</div>

					<div class="col-md-12">
						<h3 class="column-title">Happy Clients</h3>
						<div class="row all-clients">
							<div class="col-sm-4">
								<figure class="clients-logo">
                                <a href="#"><img class="img-responsive" src="{{URL::asset('/assets/image/clients/client1.png')}}" alt="" /></a>
								</figure>
							</div><!-- Client 1 end -->

							<div class="col-sm-4">
								<figure class="clients-logo">
									<a href="#"><img class="img-responsive" src="{{URL::asset('/assets/image/clients/client2.png')}}" alt="" /></a>
								</figure>
							</div><!-- Client 2 end -->

							<div class="col-sm-4">
								<figure class="clients-logo">
									<a href="#"><img class="img-responsive" src="{{URL::asset('/assets/image/clients/client3.png')}}" alt="" /></a>
								</figure>
							</div><!-- Client 3 end -->

							<div class="col-sm-4">
								<figure class="clients-logo">
									<a href="#"><img class="img-responsive" src="{{URL::asset('/assets/image/clients/client4.png')}}" alt="" /></a>
								</figure>
							</div><!-- Client 4 end -->

							<div class="col-sm-4">
								<figure class="clients-logo">
									<a href="#"><img class="img-responsive" src="{{URL::asset('/assets/image/clients/client5.png')}}" alt="" /></a>
								</figure>
							</div><!-- Client 5 end -->

							<div class="col-sm-4">
								<figure class="clients-logo">
									<a href="#"><img class="img-responsive" src="{{URL::asset('/assets/image/clients/client6.png')}}" alt="" /></a>
								</figure>
							</div><!-- Client 6 end -->

						</div><!-- Clients row end -->

					</div>

				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</section>  --}}
        {{-- <!-- contact info -->
		<section class="subscribe no-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="subscribe-call-to-acton">
							<h3>Can We Help?</h3>
                        <h4>{{$fetchcon->mobile}}</h4>
						</div>
					</div>

					<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="subscribe-call-to-acton">
                                <h3>Email us:</h3>
								<h4>{{$fetchcon->email}}</h4>
							</div>
                    <div class="col-md-1 col-sm-12 col-xs-12"></div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
						<div class="subscribe-call-to-acton">
							<h3>Website</h3>
                        <h4>{{$fetchcon->website}}</h4>
						</div>
					</div>
				</div>
			</div>
		</section> --}}

		<!-- team -->
		
        <section id="news" class="news" style="background-image: url(../assets/image/bg/download.png); padding-top:0%">
			<div class="container-fluid bg-info" style="margin-bottom: 5rem">
				<div class="text-center" style="margin-bottom:-40px; margin-top:12px">
					{{-- <h2 class="section-title frontteam"></h2> --}}
					<h3 class="section-sub-title">Our Team Members</h3>
                </div>
			</div>
	
			<div class="container">
				<div class="row">
                    <div id="team-slide" class="owl-carousel owl-theme team-slide">
				
                        @foreach ($fetchteam as $item)
                        <div class="item">
                          <div class="ts-team-wrapper text-center">
                             <div class="team-img-wrapper">
                                <img alt="" src="{{URL::asset('/assets/image/team/'.$item->pimage)}}" class="img-responsive frontabtteam">
                             </div>
                             <div class="ts-team-content">
                                <h3 class="ts-name">{{$item->name}}</h3>
                                <p class="ts-designation">{{$item->designation}}</p>
                                <p class="ts-description"></p>
                                <div class="team-social-icons">
                                   <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                   <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                   <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                   <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                </div><!--/ social-icons-->
                             </div>
                          </div><!--/ Team wrapper end -->
                       </div><!-- Team 1 end -->
                        @endforeach




                    </div><!-- Team slide end -->


				</div>
				<!--/ Content row end -->

				<div class="general-btn text-center">
                <a class="btn btn-primary" href="{{url('/team')}}">See All Posts</a>
				</div>

			</div>
			<!--/ Container end -->
		</section>
		<!--/ News end -->
@endsection
