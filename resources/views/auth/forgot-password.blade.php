@extends('frontend.dashboard')
@section('title','Đăng ký - Easy Online Shop')
@section('content')

    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <a href="{{route('register')}}"><span>Quên mật khẩu</span></a>
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 m-auto">
                    <div class="row justify-content-center">
                        <div class="heading_s1 text-center">
                            <img class="border-radius-15"
                                 src="{{asset('frontend')}}/assets/imgs/page/reset_password.svg" alt=""/>
                            <h2 class="mb-15 mt-15">Cấp lại mật khẩu</h2>
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Nhập email của bạn"/>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-heading btn-block hover-up">Liên kết
                                                đặt lại mật khẩu email
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
