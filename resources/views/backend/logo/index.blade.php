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
            <li class="breadcrumb-item"><a href="{{url('/backend/logo')}}">Logo</a></li>
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
                @if($errors->any())
                <script>alert('Data will be inserted only once!!');</script>
                @elseif(Session::has('success'))
                <script>alert('Data inserted successfully');</script>

                @endif
                <div class="card-body">
                <form method="post" action="{{route('insertlogo')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="image">Add Title</label>
                                <input type="text" class="form-control" id="image" name="title" placeholder="Enter title">
                              </div>

                          <div class="form-group">
                            <label for="desig">Description</label>
                            <textarea class="ckeditor" id="editor" name="desc"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="image">Add Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                          </div>
                          <div class="form-group">
                            <label for="image">Add Favicon</label>
                            <input type="file" class="form-control" id="favicon" name="favicon">
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
  @endsection



