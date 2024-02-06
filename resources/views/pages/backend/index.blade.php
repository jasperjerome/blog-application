<!doctype html>
<html lang="en">

@include('pages.backend.head')

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('pages.backend.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                        @yield('content')
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            @include('pages.backend.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    {{-- script file --}}
    @include('pages.backend.script')
</body>

</html>
