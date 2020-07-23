@extends('frontend.layouts.app')
@section('content')

 <section id="main-container" class="main-container">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="isotope-nav" data-isotope-nav="isotope">
                <ul>
                   <li><a href="#" class="active" data-filter="*">Show All</a></li>
                   <li><a href="#" data-filter=".app">App</a></li>
                   <li><a href="#" data-filter=".graphics">Graphics</a></li>
                   <li><a href="#" data-filter=".web">Web</a></li>
                </ul>
             </div><!-- Isotope filter end -->
          </div><!-- Filter col end -->
       </div><!-- Filter row end -->

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
                            </div><!-- Isotope item 1 end -->
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
                    </div><!-- Isotope item 1 end -->
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
                    </div><!-- Isotope item 1 end -->
                    @endif
             @endforeach


          </div>
          <div class="frontpag">{{ $fetchport->links() }}</div>
    </div><!-- Conatiner end -->
 </section><!-- Main container end -->


@endsection
