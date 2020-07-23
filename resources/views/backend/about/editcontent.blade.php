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
            <li class="breadcrumb-item"><a href="{{url('/backend/about/editcontent/'.$fetchcontent->id)}}">About</a></li>
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
                  <h3 class="card-title">About Us</h3>
                </div>
                @if($errors->any())
                <script>alert('Data will be added only once!!');</script>
                @elseif(Session::has('success'))
                <script>alert('Data updated successfully');</script>
                @endif
                <form method="post" action="{{route('updateabout',$fetchcontent->id)}}" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="desig">Description</label>
                    <textarea class="ckeditor" id="about" name="about">{{$fetchcontent->about}}</textarea>
                    <input type="hidden" value={{$fetchcontent->id}} name="aboutid"/>
                  </div>
                  <div class="form-group">
                    <label for="image">Add Image</label><br>
                    <img src="{{URL::asset(/assets/image/about/'.$fetchcontent->image)}}" class="editport img img-thumbnail"/>
                    <input type="hidden" id="image" name="phimage" value="{{$fetchcontent->image}}">
                    <input type="file" class="form-control" id="image" name="image">
                  </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary float-right" value="Update">
                </div>
            </form>
              </div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
      </div>
    </div>
  </section>

  {{-- <script src="{{URL::asset('js/about_script.js')}}"></script> --}}
  @endsection



