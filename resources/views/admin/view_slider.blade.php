<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-head mt-2">
                        <h1 style="font-size: 40px; font-weight:bolder; color: white; text-align: center;">Slider</h1>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ url('upload_slider') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label style="color: white; font-weight: bold;">Upload Slider Image</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Add Image">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    @foreach($sliders as $slider)
                        <div class="col-md-4">
                            <img src="slider/{{ $slider->image }}" alt="" style="height: 200px; width: 300px; padding: 10px;">
                            <a href="{{ url('delete_slider_image', $slider->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                     @endforeach
                </div>

            </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>