<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }
    </style>

  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div>
                    <h1 class="text-center" style="font-size: 30px; font-weight: bold;">Add Rooms</h1>
                    <form action="{{ url('add_room') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="div_deg">
                            <label>Room Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="div_deg">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="div_deg">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="div_deg">
                            <label>Room Type</label>
                            <select name="type" class="form-control">
                                <option selected value="regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                            </select>
                        </div>
                        <div class="div_deg">
                            <label>Free Wifi</label>
                            <select name="wifi" class="form-control">
                                <option selected value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="div_deg">
                            <label>Upload Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Add Room">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>