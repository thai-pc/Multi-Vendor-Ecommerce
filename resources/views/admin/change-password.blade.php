@extends('admin.dashboard');
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Đổi mật khẩu</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i
                                    class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Đổi mật khẩu</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"><span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item"
                                                                                           href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('admin.update.password')}}"
                                      enctype="multipart/form-data">
                                    @csrf

                                    @if(session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('status')}}
                                        </div>
                                    @elseif(session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('error')}}
                                        </div>
                                    @endif

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Mật khẩu cũ</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" name="old_password"
                                                   class="form-control @error('old_password') is-invalid @enderror"
                                                   id="current_password"
                                                   value="" placeholder="Nhập mật khẩu cũ"/>
                                            @error('old_password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Mật khẩu mới</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" name="new_password"
                                                   class="form-control @error('new_password') is-invalid @enderror"
                                                   id="new_password"
                                                   value="" placeholder="Nhập mật khẩu mới"/>
                                            @error('new_password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nhập lại mật khẩu mới</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" name="new_password_confirmation"
                                                   class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                                   id="new_password_confirmation"
                                                   value="" placeholder="Nhập lại mật khẩu mới"/>
                                            @error('new_password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="Lưu"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
