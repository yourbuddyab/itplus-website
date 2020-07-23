@extends('backend.layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/backend/home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/backend/portfolio/manageportfolio')}}">Manage Portfolio</a></li>
          </ol>
        </div>
      </div>
    </div>
</div>
@if(Session::has('success'))
    <script>alert('Data deleted successfully');</script>
    @endif
<div class="card">
    <div class="card-header">
      <h2 class="card-title">Portfolio</h2>
    </div>
    <div class="card-body tablediv">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Sr. no</th>
          <th>Image</th>
          <th>Category</th>
          <th>Title</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
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
            <tr>
                <td>{{$item->id}}</td>
                <td><img src="{{URL::asset('/assets/image/portfolio/'.$item->image)}}" class="manageport img img-thumbnail"/></td>
                <td>{{$itemcat}}</td>
                <td>{{$item->title}}</td>
                <td>
                    <a href="{{url('/backend/portfolio/editportfolio/'.$item->id)}}" target="_blank"><i class="fa fa-edit"></i></a>
                    <a href="{{url('/backend/portfolio/deleteportfolio/'.$item->id)}}" id="portfolio"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
      </table>
    </div>
  </div>
@endsection
