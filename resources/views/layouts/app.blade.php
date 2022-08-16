<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('includes.preloader')
        @include('includes.navbar')
        @include('includes.sidebar')


        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('includes.footer')
    </div>
    @include('includes.scripts')
</body>

</html>
