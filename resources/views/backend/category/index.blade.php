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
            <li class="breadcrumb-item"><a href="{{url('/backend/category')}}">Category</a></li>
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
                  <h3 class="card-title">Add Category</h3>
                </div>
                <div class="card-body">
                    @if($errors->any())
                    <script>alert('Record already exist!!');</script>
                    @elseif(Session::has('success'))
                    <script>alert('Data inserted successfully');</script>
                    @endif
                    <form method="post" action="{{route('insertcat')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Add Category</label>
                            <input type="text" class="form-control" name="category" placeholder="Enter Category" required>
                          </div>
                          <div class="form-group">
                            <label for="desig">Description</label>
                            <textarea class="ckeditor" id="editor" name="desc" required="required"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="image">Add Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                          </div>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right" id="category_call" value="Submit">
                        </div>
                    </form>
                </div>
              </div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
      </div>
    </div>
  </section>

  {{-- <script src="{{URL::asset('js/category_script.js')}}"></script> --}}
  @endsection



