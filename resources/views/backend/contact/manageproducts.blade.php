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
            <li class="breadcrumb-item"><a href="{{url('/backend/contact/manageproducts')}}">Products Enquiry</a></li>
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
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Company</th>
          <th>About</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($fetchcontact as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->mobile}}</td>
                <td>{{$item->cname}}</td>
                <td>{{$item->bussiness}}</td>
                <td>
                    <a href="{{url('/backend/contact/deleteproduct/'.$item->id)}}" id="contact"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
      </table>
    </div>
  </div>
@endsection
