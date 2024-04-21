@extends('frontend.dashboard')
@section('title','Đăng nhập - Easy Online Shop')
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <a href="{{route('login')}}"><span>Đăng nhập</span></a>
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <img class="border-radius-15" src="{{asset('frontend')}}/assets/imgs/page/login-1.png"
                                 alt=""/>
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">Đăng nhập</h1>
                                        <p class="mb-30">Bạn chưa có tài khoản? <a href="{{route('register')}}">Tạo
                                                ngay</a></p>
                                    </div>
                                    <form method="post" action="{{route('login')}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="email" placeholder="Nhập email của bạn"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                   placeholder="Nhập mật khẩu của bạn"/>
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <input type="text"
                                                       placeholder="Security code *"/>
                                            </div>
                                            <span class="security-code">
                                                    <b class="text-new">8</b>
                                                    <b class="text-hot">6</b>
                                                    <b class="text-sale">7</b>
                                                    <b class="text-best">5</b>
                                                </span>
                                        </div>
                                        <div class="login_footer form-group mb-50">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                           id="remember_me"/>
                                                    <label class="form-check-label" for="remember_me"><span>Ghi nhớ đăng nhập</span></label>
                                                </div>
                                            </div>
                                            <a class="text-muted" href="{{route('password.request')}}">Quên mật
                                                khẩu?</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-heading btn-block hover-up"
                                                    name="login">Đăng nhập
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
