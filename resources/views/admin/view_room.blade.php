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
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Room Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Wifi</th>
                        <th>Room Type</th>
                        <th>Image</th>
                    </tr>

                    @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->id }}</td>
                        <td>{{ $room->room_title }}</td>
                        <td>{!! Str::limit($room->description,150) !!}</td>
                        <td>₹{{ $room->price }}</td>
                        <td>{{ $room->wifi }}</td>
                        <td>{{ $room->room_type }}</td>
                        <td>
                            <img src="room/{{ $room->image }}" alt="room images" width="200px" height="200px">
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>