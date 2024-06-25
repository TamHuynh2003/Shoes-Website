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
                        <form class="login100-form validate-form" action="{{ route('loginHandle') }}" method="POST">
                            @csrf
                            <span class="login100-form-title">
                                Đăng Nhập
                            </span>
                            <div class="wrap-input100 validate-input">
                                <input type="text" for="username" id="username" name="username" class="input100"
                                    placeholder="Tài khoản" autofocus>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="zmdi zmdi-library" aria-hidden="true"></i>
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
                                <input type="password" for="password" id="password" name="password" class="input100"
                                    placeholder="Mật khẩu">
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

                            <div class="text-end pt-1">
                                <p class="mb-0"><a href="" class="text-primary ms-1">Quên mật khẩu?</a></p>
                            </div>
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    Đăng nhập
                                </button>
                            </div>
                            {{-- <div class="text-center pt-3">
                                <p class="text-dark mb-0">Not a member?<a href="" class="text-primary ms-1">Create an
                                        Account</a></p>
                            </div> --}}
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