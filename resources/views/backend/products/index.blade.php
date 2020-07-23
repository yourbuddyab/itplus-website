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
            <li class="breadcrumb-item"><a href="{{url('/backend/products')}}">Product</a></li>
          </ol>
        </div>
      </div>
    </div>
</div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-10 col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Product</h3>
                </div>
                @if(Session::has('success'))
                <script>alert('Data inserted successfully');</script>
                @endif
                <div class="card-body">
                <form method="post" action="{{route('insertpro')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                         <div class="form-group">
                            <label for="name">Services</label>
                            <select class="form-control select2" style="width: 100%;" name="service_id" required>
                                {{-- <option value="0" disabled selected>-- Choose any --</option> --}}
                                  @foreach ($fetchproducts as $item)
                                      <option value="{{$item->id}}">{{$item->products}}</option>
                                  @endforeach
                              </select>
                            </div>
                          <div class="form-group">
                            <label for="desig">Description</label>
                            <textarea class="ckeditor" id="editor" name="description"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="feature">Feature</label>
                            <textarea class="ckeditor" id="editor" name="feature"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="image">Product Icon / Logo</label>
                            <input type="file" class="form-control" id="image" name="image">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-8">
                            <label for="pimages" style="margin-left: 21px;">Product Image</label>
                            <div class="custom-file" style="margin-left: 21px; width: 95%;">
                                <input type="file" class="custom-file-input" id="pimages" multiple name="pimages[]" accept="image/*">
                                <label class="custom-file-label" for="pimages">Choose file</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="pimages" style="margin-top: 16px;"></label>
                            <select name="size" class="form-control" id="size">
                              <option disabled>Select</option>
                              <option value="375, 667">Portrait</option>
                              <option value="1500, 850">Landscape</option>
                            </select>
                          </div>
                        </div>
                        <div id="result" class="text-center" style="display:flex; margin: 20px;height: 150px!important;"></div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right" value="Submit">
                        </div>
                    </form>
                </div>
              </div>
        </div>
        <div class="col-lg-1 col-md-1"></div>
      </div>
    </div>
  </section>
  <script>
    $(".custom-file-input").on("change", function () {
        if ($(this)[0].files.length > 4) {
            $(this)[0].value = "";
            alert("You can select only 4 images");
        }else{
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        }
    });

    window.onload = function () {
        //Check File API support
        if (window.File && window.FileList && window.FileReader) {
            var filesInput = document.getElementById("pimages");
            filesInput.addEventListener("change", function (event) {
                var files = event.target.files; //FileList object
                var output = document.getElementById("result");

                output.innerHTML = '';
                if (files.length <= 4) {
                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        //Only pics
                        if (!file.type.match('image'))
                            continue;
                        var picReader = new FileReader();
                        picReader.addEventListener("load", function (event) {
                            var picFile = event.target;
                            var div = document.createElement("div");
                            div.innerHTML = `<img class="img-fluid img-thumbnail" style="height: 110px!important; margin: 20px;" src="${picFile.result}" title="${picFile.name}"/>`;
                            output.insertBefore(div, null);
                        });
                        //Read the image
                        picReader.readAsDataURL(file);
                    }
                }
            });
        }
        else {
            console.log("Your browser does not support File API");
        }
    }
</script>
  @endsection



