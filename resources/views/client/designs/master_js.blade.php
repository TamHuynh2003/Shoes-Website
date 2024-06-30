<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="zmdi zmdi-chevron-up"></i>
	</span>
</div>

<!--SweetAlert-->
<script src="{{asset('user_template/sweetalert2/sweetalert2.all.min.js')}}"></script>

@if (session('alert'))
<script>
	Swal.fire("{{ session('alert') }}")
</script>
@endif

{{-- <div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<div class="btn-social">
		<ul class="ft-menu-cl">
			<li class="menu-click"><i class="fa fa-comments" aria-hidden="true"></i>
			</li>
		</ul>
	</div>
	<script type="text/javascript">
		$(function() {
                $('.menu-click').click(function() {
                    $(this).toggleClass('open');
                });
            });
	</script>
</div> --}}

<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('user_template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/select2/select2.min.js')}}"></script>

<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('user_template/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('user_template/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/parallax100/parallax100.js')}}"></script>

<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>

<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/sweetalert/sweetalert.min.js')}}"></script>

<!--===============================================================================================-->
<script src="{{asset('user_template/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

<!--===============================================================================================-->
<script src="{{asset('user_template/js/main.js')}}"></script>