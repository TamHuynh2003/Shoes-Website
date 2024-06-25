<!doctype html>
<html lang="en" dir="ltr">

@include('server.designs.master_css')

<body class="ltr app sidebar-mini">

    <!-- GLOBAL-LOADER -->
    {{-- <div id="global-loader">
        <img src="{{ asset('admin_template/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div> --}}
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            @include('server.layouts.header')

            @include('server.layouts.sidebar')

            <div class="app-content main-content mt-0">
                <div class="side-app">
                    <div class="main-container container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>

        @include('server.layouts.footer')
    </div>

    @include('server.designs.master_js')

</body>

</html>