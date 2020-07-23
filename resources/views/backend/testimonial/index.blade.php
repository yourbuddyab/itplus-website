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
            <li class="breadcrumb-item"><a href="{{url('/backend/testimonial')}}">Testimonial</a></li>
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
                  <h3 class="card-title">Testimonial</h3>
                </div>
                @if(Session::has('success'))
                <script>alert('Data inserted successfully');</script>
                @endif
                <div class="card-body">
                <form method="post" action="{{route('inserttest')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                         <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Enter name">
                            </div>
                          <div class="form-group">
                            <label for="desig">Designation</label>
                            <input type="text" class="form-control" id="desig" name="desig" placeholder="Enter designation">
                          </div>
                          <div class="form-group">
                            <label for="desig">Description</label>
                            <textarea class="ckeditor" id="editor" name="desc"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="image">Add Image</label>
                            <input type="file" class="form-control" id="image" name="pimage">
                          </div>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right" value="Submit">
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



