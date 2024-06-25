<!-- JQUERY JS -->
<script src="{{ asset('admin_template/assets/js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('admin_template/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('admin_template/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('admin_template/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>

<!-- STICKY JS -->
<script src="{{ asset('admin_template/assets/js/sticky.js')}}"></script>

<!-- COLOR THEME JS -->
<script src="{{ asset('admin_template/assets/js/themeColors.js')}}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('admin_template/assets/js/custom.js')}}"></script>

<!--SweetAlert-->
<script src="{{asset('admin_template/sweetalert2/sweetalert2.all.min.js')}}"></script>

@if (session('alert'))
<script>
    Swal.fire("{{session('alert')}}")
</script>
@endif