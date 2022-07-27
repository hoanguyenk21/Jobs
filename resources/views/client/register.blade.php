@extends('client.layout.layout')
@section('title', 'Trang chủ')
@section('main-content')

        <!-- Titlebar -->
        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Đăng ký tài khoản</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index-1.html">Trang chủ</a></li>
                                <li>Đăng ký</li>
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
                            <h3>Tạo mới tài khoản của bạn</h3>
                            <span> Bạn đã có tài khoản <a href="login.html"> Đăng nhập!</a></span>
                        </div>
                        <div class="utf-account-type">
                            <div>
                                <input type="radio" name="utf-account-type-radio" id="freelancer-radio" class="utf-account-type-radio" checked />
                                <label for="freelancer-radio" title="Employer" data-tippy-placement="top" class="utf-ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Nhà tuyển
                  dụng</label>
                            </div>
                            <div>
                                <input type="radio" name="utf-account-type-radio" id="employer-radio" class="utf-account-type-radio" />
                                <label for="employer-radio" title="Candidate" data-tippy-placement="top" class="utf-ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Ứng viên</label>
                            </div>
                        </div>

                        <form method="post" id="utf-register-account-form">
                            <div class="utf-no-border">
                                <input type="text" class="utf-with-border" name="name-register" id="name-register" placeholder="Ho và Tên " required />
                            </div>
                            <div class="utf-no-border">
                                <input type="text" class="utf-with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Địa chỉ email" required />
                            </div>
                            <!-- <div class="utf-no-border margin-bottom-18">
                                <select class="selectpicker utf-with-border" data-size="5" title="Select Jobs">
					<option>Web Designer</option>
					<option>Web Developer</option>
					<option>Graphic Designer</option>
					<option>Android Developer</option>
					<option>IOS Developer</option>
					<option>UI/UX Designer</option>
					<option>Graphics Designer</option>				
				</select>
                            </div> -->
                            <div class="utf-no-border">
                                <input type="password" class="utf-with-border" name="password-register" id="password-register" placeholder="Mật khẩu" required />
                            </div>
                            <div class="utf-no-border">
                                <input type="password" class="utf-with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Nhập lại mật khẩu" required />
                            </div>
                            <!-- <div class="checkbox margin-top-10">
                                <input type="checkbox" id="two-step0">
                                <label for="two-step0"><span class="checkbox-icon"></span> I Have Read and Agree to the <a
                    href="#">Terms &amp; Conditions</a></label>
                            </div> -->
                        </form>
                        <button class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit"> Tạo tài khoản <i class="icon-feather-chevron-right"></i></button>
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