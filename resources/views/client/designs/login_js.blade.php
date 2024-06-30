<!--SweetAlert-->
<script src="{{asset('user_template/sweetalert2/sweetalert2.all.min.js')}}"></script>

@if (session('alert'))
<script>
    Swal.fire("{{ session('alert') }}")
</script>
@endif

<script src="{{ asset('login_template/js/jquery.min.js')}}"></script>
<script src="{{ asset('login_template/js/popper.js')}}"></script>
<script src="{{ asset('login_template/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('login_template/js/main.js')}}"></script>