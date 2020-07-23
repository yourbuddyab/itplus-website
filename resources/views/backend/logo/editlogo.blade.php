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
            <li class="breadcrumb-item"><a href="{{url('/backend/logo/editlogo/'.$fetchlogo->id)}}">Logo</a></li>
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
                  <h3 class="card-title">Logo</h3>
                </div>
                @if(Session::has('success'))
                <script>alert('Data updated successfully');</script>
                @endif
                <div class="card-body">
                <form method="post" action="{{route('updatelogo',$fetchlogo->id)}}" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                         <div class="form-group">
                            <label for="name">Company Name</label>
                         <input type="text" class="form-control" id="image" name="title" placeholder="Enter title" value="{{$fetchlogo->title}}">
                            </div>
                          <div class="form-group">
                            <label for="desig">Description</label>
                            <textarea class="ckeditor" id="editor" name="desc">{{$fetchlogo->description}}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="image">Add Image</label><br>
                            <img src="{{URL::asset('/assets/image/logo/'.$fetchlogo->image)}}" class="editport img img-thumbnail"/>
                            <input type="hidden" id="image" name="phimage" value="{{$fetchlogo->image}}">
                            <input type="file" class="form-control" id="image" name="image">
                          </div>

                          <div class="form-group">
                            <label for="image">Add Favicon</label><br>
                            <img src="{{URL::asset('/assets/image/logo/'.$fetchlogo->favicon)}}" class="editport img img-thumbnail"/>
                            <input type="hidden" id="image" name="fhimage" value="{{$fetchlogo->favicon}}">
                            <input type="file" class="form-control" id="favicon" name="favicon">
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



