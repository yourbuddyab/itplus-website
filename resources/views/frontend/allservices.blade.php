@extends('frontend.layouts.app')
@section('content')

 <section id="main-container" class="main-container">
    <div class="container">
       <div class="row">
        @foreach ($fetchser as $item)
          <div class="col-md-4">
             <div class="ts-service-box">
                <div class="ts-service-image-wrapper">
                   <img class="img-responsive frontind1" src="{{URL::asset('/assets/image/services/'.$item->image)}}" alt="{{$item->category}}">
                </div>

                <div class="">
                <h3 class="service-box-title"><a href="{{ url('services/'.$item->category_id) }}">{{$item->category}}</a></h3>
                   <p>{!!  Str::limit($item->description, 200) !!}</p>
                   <p><a class="learn-more" href="{{ url('services/'.$item->category_id) }}"><i class="fa fa-caret-right"></i> Learn More</a></p>
                </div>
             </div>
          </div>
          @endforeach
          <div class="gap-30"></div>
       </div>
    </div>
 </section>
@endsection
