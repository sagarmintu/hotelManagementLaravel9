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
                        <th>Room ID</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Arrival Date</th>
                        <th>Leaving Date</th>
                        <th>Status</th>
                        <th>Room Title</th>
                        <th>Room Price</th>
                        <th>Room Image</th>
                        <th>Action</th>
                        <th>Status Update</th>
                    </tr>

                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->room_id }}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{{ $booking->start_date }}</td>
                        <td>{{ $booking->end_date }}</td>
                        <td>
                            @if($booking->status == 'Approved')
                                <span style="color: green;">Approved</span>
                            @endif

                            @if($booking->status == 'Rejected')
                                <span style="color: red;">Rejected</span>
                            @endif

                            @if($booking->status == 'waiting')
                                <span style="color: yellow;">waiting</span>
                            @endif

                        </td>
                        <td>{{ $booking->room->room_title }}</td>
                        <td>{{ $booking->room->price }}</td>
                        <td>
                            <img src="room/{{ $booking->room->image }}" alt="" height="200px" width="200px">
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure, you want to delete?');" href="{{ url('delete_booking',$booking->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                        <td>
                            <a href="{{ url('approve_book',$booking->id) }}" class="btn btn-secondary btn-sm">Approve</a>
                            <a href="{{ url('reject_book',$booking->id) }}" class="btn btn-warning btn-sm">Reject</a>
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