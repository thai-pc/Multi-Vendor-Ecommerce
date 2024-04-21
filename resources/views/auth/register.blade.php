@extends('frontend.dashboard')
@section('title','Đăng ký - Easy Online Shop')
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow"><i class="fi-rs-home mr-5"></i>Tranng chủ</a>
                <a href="{{route('password.request')}}"><span>Đăng ký</span></a>
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">Tạo tài khoản</h1>
                                        <p class="mb-30">Bạn đã có tài khoản? <a href="{{route('login')}}">Đăng nhập</a>
                                        </p>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="username"
                                                   placeholder="Nhập tên tài khoản của bạn"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="name"
                                                   placeholder="Nhập họ và tên của bạn"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Nhập email của bạn"/>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" name="password"
                                                   placeholder="Nhập mật khẩu của bạn"/>
                                        </div>
                                        <div class="form-group">
                                            <input id="password_confirmation" type="password" name="password_confirmation"
                                                   placeholder="Nhập lại mật khẩu của bạn"/>
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <input type="text" name=""
                                                       placeholder="Security code *"/>
                                            </div>
                                            <span class="security-code">
                                                    <b class="text-new">8</b>
                                                    <b class="text-hot">6</b>
                                                    <b class="text-sale">7</b>
                                                    <b class="text-best">5</b>
                                                </span>
                                        </div>
                                        <div class="payment_option mb-50">
                                            <div class="custome-radio">
                                                <input class="form-check-input" type="radio"
                                                       name="role" id="exampleRadios3" checked=""/>
                                                <label class="form-check-label" for="exampleRadios3"
                                                       data-bs-toggle="collapse" data-target="#bankTranfer"
                                                       aria-controls="bankTranfer">Tôi là một người dùng</label>
                                            </div>
                                            <div class="custome-radio">
                                                <input class="form-check-input" type="radio"
                                                       name="role" id="exampleRadios4"/>
                                                <label class="form-check-label" for="exampleRadios4"
                                                       data-bs-toggle="collapse" data-target="#checkPayment"
                                                       aria-controls="checkPayment">Tôi là một nhà bán hàng</label>
                                            </div>
                                        </div>
                                        <div class="login_footer form-group mb-50">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="agree"
                                                           id="agree_me" checked/>
                                                    <label class="form-check-label" for="agree_me"><span>Tôi đồng ý với điều khoản &amp; chính sách.</span></label>
                                                </div>
                                            </div>
                                            <a href="page-privacy-policy.html"><i
                                                    class="fi-rs-book-alt mr-5 text-muted"></i>Xem thêm</a>
                                        </div>
                                        <div class="form-group mb-30">
                                            <button type="submit"
                                                    class="btn btn-fill-out btn-block hover-up font-weight-bold"
                                                    name="login">Đăng ký
                                            </button>
                                        </div>
                                        <p class="font-xs text-muted"><strong>Chú ý:</strong>Dữ liệu cá nhân của bạn sẽ
                                            được sử dụng để hỗ trợ trải nghiệm của bạn trên toàn bộ trang web này, để
                                            quản lý quyền truy cập vào tài khoản của bạn và cho các mục đích khác được
                                            mô tả trong chính sách bảo mật của chúng tôi</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <div class="card-login mt-115">
                                <a href="#" class="social-login facebook-login">
                                    <img src="{{asset('frontend')}}/assets/imgs/theme/icons/logo-facebook.svg" alt=""/>
                                    <span>Đăng nhập với Facebook</span>
                                </a>
                                <a href="#" class="social-login google-login">
                                    <img src="{{asset('frontend')}}/assets/imgs/theme/icons/logo-google.svg" alt=""/>
                                    <span>Đăng nhập với Google</span>
                                </a>
                                <a href="#" class="social-login apple-login">
                                    <img src="{{asset('frontend')}}/assets/imgs/theme/icons/logo-apple.svg" alt=""/>
                                    <span>Đăng nhập với Apple</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
