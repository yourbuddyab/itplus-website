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
            <li class="breadcrumb-item"><a href="{{url('/backend/services/editservice/'.$fetchservice->id)}}">Services</a></li>
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
                  <h3 class="card-title">Services</h3>
                </div>
                @if($errors->any())
                <script>alert('Record already exist!!');</script>
                @elseif(Session::has('success'))
                <script>alert('Data updated successfully');</script>
                @endif

                <form method="post" action="{{route('upsertservice',$fetchservice->id)}}" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control select2" style="width: 100%;" name="categoryid">
                          <option value="0" disabled selected>-- Choose any --</option>
                            @foreach ($fetchcat as $item)
                                <option value="{{$item->category_id}}" @if($fetchservice->category_id == $item->category_id) Selected @else  @endif>{{$item->category}}</option>
                            @endforeach
                        </select>
                      </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Add Services</label>
                            <input type="text" name="products" id="products" placeholder="Enter Products" class="form-control" value="{{$fetchservice->products}}"/>
                          <input type="hidden" class="form-control" id="serviceid" value="{{$fetchservice->id}}">
                          </div>

                          <div class="form-group">
                            <label for="image">Add Image</label><br>
                          <img src="{{URL::asset('/assets/image/category/'.$fetchservice->service_image)}}" class="editport img img-thumbnail" alt="{{$fetchservice->category['category']}}"/>
                            <input type="hidden" id="image" name="phimage" value="{{$fetchservice->service_image}}">
                            <input type="file" class="form-control" id="image" name="service_image">
                          </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right" id="ser_update" value="Update">
                </div>
                </form>
            </div>
              </div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
      </div>
    </div>
  </section>

  <script src="{{URL::asset('js/service_script.js')}}"></script>
  @endsection



