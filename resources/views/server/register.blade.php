<!doctype html>
<html lang="en" dir="ltr">

@include('server.designs.login_css')

<body class="ltr login-img">

    <!-- GLOABAL LOADER -->
    {{-- <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div> --}}
    <!-- /GLOABAL LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div>
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto text-center">
                <a href="" class="text-center">
                    <img src="{{ asset('admin_template/assets/images/brand/logo.png')}}" class="header-brand-img"
                        alt="">
                </a>
            </div>
            <div class="container-login100">
                <div class="wrap-login100 p-0">
                    <div class="card-body">
                        <form class="login100-form validate-form" action="" method="POST">
                            @csrf
                            <span class="login100-form-title">
                                Đăng Ký
                            </span>

                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="fullname" value="{{ old('fullname') }}"
                                    placeholder="Họ Và Tên " autofocus required>

                                <span class="focus-input100"></span>

                                <span class="symbol-input100">
                                    <i class="zmdi zmdi-library" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="form-text">
                                <font style="vertical-align: inherit;">
                                    @error('fullname')
                                    <font style="vertical-align: inherit;color:red">{{ $message }}</font>
                                    @enderror
                                </font>
                            </div>

                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="email" value="{{ old('email') }}"
                                    placeholder="Email" autofocus required>

                                <span class="focus-input100"></span>

                                <span class="symbol-input100">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="form-text">
                                <font style="vertical-align: inherit;">
                                    @error('email')
                                    <font style="vertical-align: inherit;color:red">{{ $message }}</font>
                                    @enderror
                                </font>
                            </div>

                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="username" value="{{ old('username') }}"
                                    placeholder="Tên Tài Khoản " autofocus required>

                                <span class="focus-input100"></span>

                                <span class="symbol-input100">
                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="form-text">
                                <font style="vertical-align: inherit;">
                                    @error('username')
                                    <font style="vertical-align: inherit;color:red">{{ $message }}</font>
                                    @enderror
                                </font>
                            </div>

                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="password" name="password" value="{{ old('password') }}"
                                    placeholder="Mật Khẩu" autofocus required>

                                <span class="focus-input100"></span>

                                <span class="symbol-input100">
                                    <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="form-text">
                                <font style="vertical-align: inherit;">
                                    @error('password')
                                    <font style="vertical-align: inherit;color:red">{{ $message }}</font>
                                    @enderror
                                </font>
                            </div>

                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="password" name="confirm_password"
                                    value="{{ old('confirm_password') }}" placeholder="Xác Nhận Lại Mật Khẩu" autofocus
                                    required>

                                <span class="focus-input100"></span>

                                <span class="symbol-input100">
                                    <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="form-text">
                                <font style="vertical-align: inherit;">
                                    @error('confirm_password')
                                    <font style="vertical-align: inherit;color:red">{{ $message }}</font>
                                    @enderror
                                </font>
                            </div>

                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    Tạo Tài Khoản
                                </button>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Đã Có Tài Khoản?<a href="{{route('login')}}"
                                        class="text-primary ms-1">Đăng Nhập</a>
                                </p>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-center my-3">
                            <a href="" class="social-login  text-center me-4">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="" class="social-login  text-center me-4">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="" class="social-login  text-center">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->

    @include('server.designs.login_js')

</body>

</html>