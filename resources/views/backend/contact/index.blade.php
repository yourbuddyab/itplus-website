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
            <li class="breadcrumb-item"><a href="{{url('/backend/contact')}}">Contact</a></li>
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
                  <h3 class="card-title">Add Contact</h3>
                </div>
                @if($errors->any())
                <script>alert('Data will be added only once!!');</script>
                @elseif(Session::has('success'))
                <script>alert('Data inserted successfully');</script>
                @endif
                <form method="post" action="{{route('inscontact')}}" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="number" class="form-control" name="mobile" placeholder="Enter mobile">
                          </div>
                          <div class="form-group">
                            <label for="mobile">Website</label>
                            <input type="text" class="form-control" name="website" placeholder="Enter website">
                          </div>
                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" name="editor1"></textarea>
                          </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right" id="contact_call" value="Submit">
                        </div>

                </div>
                </form>
              </div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
      </div>
    </div>
  </section>

  {{-- <script src="{{URL::asset('js/contact_script.js')}}"></script> --}}
  @endsection



