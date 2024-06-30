<!doctype html>
<html lang="en">

@include('client.designs.login_css')

<body class="img js-fullheight" style="background-image: url({{asset('login_template/images/bg.jpg')}});">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Đăng Nhập</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                                    placeholder="Email" autofocus required>
                            </div>
                            <div class="form-text">
                                <font style="vertical-align: inherit;">
                                    @error('email')
                                    <font style="vertical-align: inherit;color:red">{{ $message }}</font>
                                    @enderror
                                </font>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" value="{{ old('password') }}"
                                    class="form-control" placeholder="Mật Khẩu" autofocus required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-text">
                                <font style="vertical-align: inherit;">
                                    @error('password')
                                    <font style="vertical-align: inherit;color:red">{{ $message }}</font>
                                    @enderror
                                </font>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Đăng
                                    Nhập</button>
                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">
                                        <a href="{{route('user_register')}}" style="color: #fff">Đăng Ký</a>
                                    </label>
                                </div>

                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Quên Mật Khẩu</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Đăng Nhập Với &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-google mr-2"></span>
                                Google</a>
                        </div>
                        <br />
                        <div class="social d-flex text-center">
                            <a href="{{route('home')}}" class="px-2 py-2 mr-md-1 rounded">
                                <span class="ion-logo-facebook mr-2">Trở Lại</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('client.designs.login_js')

</body>

</html>