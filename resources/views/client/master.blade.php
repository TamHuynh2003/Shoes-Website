<!DOCTYPE html>
<html lang="en">

@include('client.designs.master_css')

<body class="animsition">

    @include('client.layout.header')


    @yield('content')


    @include('client.layout.footer')

    @include('client.designs.master_js')

</body>

</html>