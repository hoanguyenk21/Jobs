@extends('client.layout.layout')
@section('title', 'Trang chủ')
@section('main-content')

        <!-- Titlebar -->
        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Quên mật khẩu</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index-1.html">Trang chủ</a></li>
                                <li>Quên mật khẩu</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="utf-login-register-page-aera margin-bottom-50">
                        <div class="utf-welcome-text-item">
                            <h3>Bạn đã quên mật khẩu?</h3>
                            <span>Hãy nhập địa chỉ email của bạn chúng tôi sẽ gửi mã code bao gồm 6 ký tự về email của bạn</span>
                        </div>
                        <form method="post" id="login-form">
                            <div class="utf-no-border">
                                <input type="text" class="utf-with-border" name="emailaddress" id="emailaddress" placeholder="Địa chỉ email của bạn" required/>
                            </div>
                        </form>
                        <button class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form"> Lấy mã <i class="icon-feather-chevron-right"></i></button>
                        <div class="forget-text margin-top-15">
                            <span>Quay lại trang, <a href="javascript:void(0);"> Đăng nhập</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Block Start -->
        <section class="utf_cta_area_item utf_cta_area2_block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_subscribe_block">
                            <div class="col-xl-8 col-md-7">
                                <div class="section-heading">
                                    <h2 class="utf_sec_title_item utf_sec_title_item2">Đăng ký Email!</h2>
                                    <p class="utf_sec_meta">Để nhận nhưng công việc phù hợp, và thông tin mới nhất từ chúng tôi.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-5">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <i class="icon-material-baseline-mail-outline"></i>
                                        <input class="form-control" type="email" placeholder="Địa chỉ email của bạn" required="">
                                        <button class="utf_theme_btn" type="submit">Đăng ký</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe Block End -->

@endsection