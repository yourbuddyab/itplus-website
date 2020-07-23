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
            <li class="breadcrumb-item"><a href="{{url('/backend/testimonial/managetestimonial')}}">Manage Testimonial</a></li>
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
      <h2 class="card-title">Testimonial</h2>
    </div>
    <div class="card-body tablediv">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Sr. no</th>
          <th>Profile</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($fetchtest as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td><img src="{{URL::asset('/assets/image/testimonial/'.$item->pimage)}}" class="manageport img img-thumbnail"/></td>
                <td>{{$item->name}}</td>
                <td>{{$item->designation}}</td>
                <td>
                    <a href="{{url('/backend/testimonial/edittestimonial/'.$item->id)}}" target="_blank"><i class="fa fa-edit"></i></a>
                    <a href="{{url('/backend/testimonial/deletetest/'.$item->id)}}" id="testimonial"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
      </table>
    </div>
  </div>
@endsection
