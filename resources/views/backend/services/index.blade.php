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
            <li class="breadcrumb-item"><a href="{{url('/backend/services')}}">Services</a></li>
          </ol>
        </div>
      </div>
    </div>
</div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-8 col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Service</h3>
                </div>
                @if($errors->any())
                <script>alert('Record already exist!!');</script>
                @elseif(Session::has('success'))
                <script>alert('Data inserted successfully');</script>
                @endif
                <form method="post" action="{{route('insertservice')}}" enctype="multipart/form-data">
                    @csrf
                 <div class="card-body">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control select2" style="width: 100%;" name="category_id">
                            @foreach ($fetchcat as $item)
                                <option value="{{$item->category_id}}">{{$item->category}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="products">Add Products</label>
                       <input type="text" name="products" id="products" placeholder="Enter Products" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label for="image">Add Image</label>
                        <input type="file" class="form-control" id="image" name="service_image">
                      </div>
                  </div>
                  <div class="card-footer">
                    <input type="submit" class="btn btn-primary float-right" id="service_call" value="Submit">
                </div>
                </form>
              </div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
      </div>
    </div>
  </section>

  <script src="{{URL::asset('/js/service_script.js')}}"></script>
  @endsection



