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
            <li class="breadcrumb-item"><a href="{{url('/backend/about/manage-content')}}">Manage Content</a></li>
          </ol>
        </div>
      </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
      <h2 class="card-title">Manage</h2>
    </div>
    <div class="card-body tablediv">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Sr. no</th>
          <th>About</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($getcontent as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{!! $item->about !!}</td>
                <td>
                    <a href="{{url('/backend/about/editcontent/'.$item->id)}}" target="_blank"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
            @endforeach
      </table>
    </div>
  </div>
@endsection
