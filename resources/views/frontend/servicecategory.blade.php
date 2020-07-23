@extends('frontend.layouts.app')
@section('content')

 <section id="main-container" class="main-container">
    <div class="container">
       <div class="row">

        @foreach ($fetchser as $item)
        <div class="col-md-3">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                   <a href="{{ url('services/'.$item->id) }}">
                  <img class="img-responsive frontind1" src="{{URL::asset('/assets/image/category/'.$item->service_image)}}" alt="{{$item->products}}">
                   </a>
               </div>
               <div class="">
               <h3 class="service-box-title text-center"><a href="{{ url('services/'.$item->id) }}">{{$item->products}}</a></h3>
               </div>
            </div>
         </div>
          @endforeach
          <div class="gap-30"></div>
          <div class="frontpag">{{ $fetchser->links() }}</div>
       </div>
    </div>
 </section>
@endsection
