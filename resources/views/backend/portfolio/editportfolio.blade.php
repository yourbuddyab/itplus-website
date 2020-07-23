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
          <li class="breadcrumb-item"><a href="{{url('/backend/portfolio/editportfolio/'.$fetchport->id)}}">Portfolio</a></li>
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
                  <h3 class="card-title">Our Portfolio</h3>
                </div>
                <div class="card-body">
                @if(Session::has('success'))
                    <script>alert('Data updated successfully');</script>
                    {{-- {{ Session::get('success') }} --}}
                @endif
                <form method="post" action="{{route('updateport',$fetchport->id)}}" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                         <div class="form-group">
                            <label for="exampleInputEmail1">Select Category</label>
                            <select name="cat" id="cat" class="form-control">
                                <option value="1" @if($fetchport->port_category == 1) Selected @else  @endif>App</option>
                                <option value="2" @if($fetchport->port_category == 2) Selected @else  @endif>Graphics</option>
                                <option value="3" @if($fetchport->port_category == 3) Selected @else  @endif>Web</option>
                            </select>
                            </div>
                          <div class="form-group">
                            <label for="title">Add Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{$fetchport->title}}">
                          </div>
                          <div class="form-group">
                            <label for="image">Add Image</label><br>
                            <img src="{{URL::asset('/assets/image/portfolio/'.$fetchport->image)}}" class="editport img img-thumbnail"/>
                          <input type="hidden" id="image" name="app_himage" value="{{$fetchport->image}}">
                            <input type="file" class="form-control" id="image" name="app_image">
                          </div>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right" value="Update">
                        </div>
                    </form>
                </div>
              </div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
      </div>
    </div>
  </section>

  <script src="{{URL::asset('js/category_script.js')}}"></script>
  @endsection



