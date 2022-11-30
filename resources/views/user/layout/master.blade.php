<!DOCTYPE html>
<html>

<!-- start head -->
@include('user.layout.head')
<!-- end head -->

<body>
    <!-- start header -->
    <!-- start navbar -->
    @include('user.layout.nav')
    <!-- end navbar -->
    <!-- end header -->

    @yield('content')

    <!-- start scroll Up arrow -->
    <div class="scrollUp">
        <a href="#home "><i class="fas fa-arrow-up "></i></a>
    </div>
    <!-- end scroll Up arrow -->

    <!-- Register & login Model -->
    @include('user.layout.model')
    <!-- end Register & login Model -->

    <!-- start footer -->
    @include('user.layout.footer')
    <!-- end footer -->

    <!-- script -->
    @include('user.layout.script')

    @yield('script')

</body>

</html>
