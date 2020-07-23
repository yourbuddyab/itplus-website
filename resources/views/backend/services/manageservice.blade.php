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
            <li class="breadcrumb-item"><a href="{{url('/backend/services/manage-service')}}">Manage Service</a></li>
          </ol>
        </div>
      </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
      <h2 class="card-title">Manage</h2>
    </div>
    @if(Session::has('success'))
    <script>alert('Data deleted successfully');</script>
    @endif
    <div class="card-body tablediv">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Sr. no</th>
          <th>Image</th>
          <th>Category</th>
          <th>Products</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($fetchservice as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td><img src="{{URL::asset('/assets/image/category/'.$item->service_image)}}" class="manageport img img-thumbnail" alt="{{$item->category['category']}}"/></td>
                <td>{{$item->category['category']}}</td>
                <td>{!! $item->products !!}</td>
                <td>
                    <a href="{{url('/backend/services/editservice/'.$item->id)}}" target="_blank"><i class="fa fa-edit"></i></a>
                    <a href="{{url('/backend/services/deleteservice/'.$item->id)}}" id="service"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
      </table>
    </div>
  </div>
@endsection
