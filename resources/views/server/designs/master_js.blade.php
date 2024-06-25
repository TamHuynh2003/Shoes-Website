<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS * -->
<script src="{{ asset('admin_template/assets/js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('admin_template/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('admin_template/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('admin_template/assets/plugins/sidemenu/sidemenu.js')}}"></script>

<!-- APEXCHART JS -->
<script src="{{ asset('admin_template/assets/js/apexcharts.js')}}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('admin_template/assets/plugins/select2/select2.full.min.js')}}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('admin_template/assets/js/circle-progress.min.js')}}"></script>

<!-- INTERNAL DATA-TABLES JS-->
<script src="{{ asset('admin_template/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

<!--Action Table-->
{{-- <script src="{{ asset('admin_template/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin_template/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script> --}}

<!-- INDEX JS -->
<script src="{{ asset('admin_template/assets/js/index1.js')}}"></script>

<!-- REPLY JS-->
<script src="{{ asset('admin_template/assets/js/reply.js')}}"></script>

<!-- PERFECT SCROLLBAR JS-->
<script src="{{ asset('admin_template/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('admin_template/assets/plugins/p-scroll/pscroll.js')}}"></script>

<!-- STICKY JS -->
<script src="{{ asset('admin_template/assets/js/sticky.js')}}"></script>

<!-- COLOR THEME JS -->
<script src="{{ asset('admin_template/assets/js/themeColors.js')}}"></script>

<!-- CUSTOM JS * -->
<script src="{{ asset('admin_template/assets/js/custom.js')}}"></script>

<!--SweetAlert-->
<script src="{{asset('admin_template/sweetalert2/sweetalert2.all.min.js')}}"></script>

@if (session('alert'))
<script>
    Swal.fire("{{ session('alert') }}")
</script>
@endif

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Modals -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>

{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>--}}

{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}