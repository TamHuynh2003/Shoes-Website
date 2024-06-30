<!doctype html>
<html lang="en">

@include('client.designs.login_css')

<body class="img js-fullheight" style="background-image: url({{asset('login_template/images/bg.jpg')}});">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Đăng Ký</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="{{asset('user_register')}}" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Họ Và Tên" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Số Điện Thoại" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Mật Khẩu"
                                    required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control"
                                    placeholder="Xác Nhận Lại Mật Khẩu" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Tạo Tài
                                    Khoản</button>
                            </div>
                            <div class="social d-flex text-center">
                                <a href="{{route('user_login')}}" class="px-2 py-2 mr-md-1 rounded">
                                    <span class="ion-logo-facebook mr-2">
                                        Trở Lại
                                    </span>
                                </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('client.designs.login_js')

</body>

</html>