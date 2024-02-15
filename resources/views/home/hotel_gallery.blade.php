<!DOCTYPE html>
<html lang="en">

<head>
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

    <!-- gallery -->
    @include('home.gallery')
    <!-- end gallery -->

    <!--  contact -->
    @include('home.contact')
    <!-- end contact -->

    <!--  footer -->
    @include('home.footer')

</body>

</html>