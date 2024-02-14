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
            </div>
        </div>
    </div>

    <!--  footer -->
    @include('home.footer')

</body>

</html>