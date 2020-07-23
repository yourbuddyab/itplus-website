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
            <li class="breadcrumb-item"><a href="{{url('/backend/category/manage-category')}}">Manage Category</a></li>
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
      <h2 class="card-title">All Categories</h2>
    </div>
    <div class="card-body tablediv">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Sr. no</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($fetchcat as $item)
            <tr>
                <td>{{$item->category_id}}</td>
                <td>{{$item->category}}</td>
                <td>
                    <a href="{{url('/backend/category/editcategory/'.$item->category_id)}}" target="_blank"><i class="fa fa-edit"></i></a>
                    <a href="{{url('/backend/category/deletecategory/'.$item->category_id)}}" id="category"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
      </table>
    </div>
  </div>
@endsection
