<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <header>
        <!-- header inner -->
        @include('home.header')
    </header>
    <!-- end header inner -->
    <!-- end header -->

    <div class="our_room">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div id="serv_hover" class="room">
                        <div class="room_img" style="padding: 20px;">
                            <figure>
                                <img src="/room/{{ $rooms->image }}" />
                            </figure>
                        </div>
                        <div class="bed_room">
                            <h3>{{ $rooms->room_title }}</h3>
                            <p style="padding: 12px;">{{ $rooms->description }}</p>
                            <h4 style="padding: 12px;">Free Wifi : {{ $rooms->wifi }}</h4>
                            <h4 style="padding: 12px;">Room Type : {{ $rooms->room_type }}</h4>
                            <h3 style="padding: 12px;">Price : ₹{{ $rooms->price }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header titlepage">
                            <h2>Room Booking</h2>
                        </div>
                        <div class="card-body">
                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <li><span class="text-danger">{{ $error }}</span></li>
                                @endforeach
                            @endif
                            <form action="{{ url('add_booking',$rooms->id) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" @if(Auth::id()) value="{{ Auth::user()->name }}" @endif>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email" @if(Auth::id()) value="{{ Auth::user()->email }}" @endif>
                                </div>
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Enter Phone" @if(Auth::id()) value="{{ Auth::user()->phone }}" @endif>
                                </div>
                                <div class="mb-3">
                                    <label>Start Date</label>
                                    <input type="date" name="start_date" id="start_date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>End Date</label>
                                    <input type="date" name="end_date" id="end_date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary text-center" value="Book Room">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  footer -->
    @include('home.footer')

    <script>
        $(function (){
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if(month < 10)
            {
                month = '0' + month.toString();
            }
            if(day < 10)
            {
                day = '0' + day.toString();
            }

            var maxDate = year + '-' + month +'-' + day;

            $('#start_date').attr('min', maxDate);
            $('#end_date').attr('min', maxDate);

        });
    </script>

</body>

</html>