@extends('client.layout.layout')
@section('title', 'Đơn ứng tuyển')
@section('main-content')
<!-- Titlebar -->
<div id="titlebar" class="gradient">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách công việc đã ứng tuyển</h2>
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="index-1.html">Trang Chủ</a></li>
                    <li>Công việc đã ứng tuyển</li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>
<!-- Titlebar End -->

<!-- Page Content -->
<div class="container">
<div class="row">
    <div class="col-xl-8 col-lg-9">

        <div class="utf-notify-box-aera">
            <div class="utf-switch-container-item">
                <span>Danh sách <strong>2</strong> việc làm đã ứng tuyển </span>
            </div>
            <div class="sort-by">
                <span>Sắp xếp theo:</span>
                <select class="selectpicker hide-tick">
                    <option>Mới nhất</option>
                    <option>Cũ nhất</option>
                    <option>Random</option>
                </select>
            </div>
        </div>

        <div class="utf-listings-container-part compact-list-layout margin-top-35">
            <a href="single-job-page.html" class="utf-job-listing">
                <div class="utf-job-listing-details">
                    <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt="">
                    </div>
                    <div class="utf-job-listing-description">
                        <span class="dashboard-status-button utf-job-status-item green"><i
                                class="icon-material-outline-business-center"></i> Trạng thái</span>
                        <i class="far fa-clock time-apply" style="padding-left: 253px;"></i> <span>25-08-2021 22:12PM</span>
                        <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art <span class="utf-verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h3>
                        <div class="utf-job-listing-footer">
                            <ul>
                                <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                                <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000
                                </li>
                                <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676
                                </li>
                                <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                            </ul>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </a>

            <a href="single-job-page.html" class="utf-job-listing">
                <div class="utf-job-listing-details">
                    <div class="utf-job-listing-company-logo"> <img src="images/company_logo_2.png" alt="">
                    </div>
                    <div class="utf-job-listing-description">
                        <span class="dashboard-status-button utf-job-status-item green"><i
                                class="icon-material-outline-business-center"></i> Trạng thái</span>
                        <i class="far fa-clock time-apply" style="padding-left: 253px;"></i> <span>25-08-2021 22:12PM</span>

                        <h3 class="utf-job-listing-title">PHP Developer, Team of PHP & IT Co</h3>
                        <div class="utf-job-listing-footer">
                            <ul>
                                <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                                <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000
                                </li>
                                <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676
                                </li>
                                <li><i class="icon-material-outline-access-time"></i> 30 Minute Ago</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </a>

            <a href="single-job-page.html" class="utf-job-listing">
                <div class="utf-job-listing-details">
                    <div class="utf-job-listing-company-logo"> <img src="images/company_logo_3.png" alt="">
                    </div>
                    <div class="utf-job-listing-description">
                        <span class="dashboard-status-button utf-job-status-item green"><i
                                class="icon-material-outline-business-center"></i> Trạng thái</span>
                        <i class="far fa-clock time-apply" style="padding-left: 253px;"></i> <span>25-08-2021 22:12PM</span>

                        <h3 class="utf-job-listing-title">Website Developer & Software Developer</h3>
                        <div class="utf-job-listing-footer">
                            <ul>
                                <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                                <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000
                                </li>
                                <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676
                                </li>
                                <li><i class="icon-material-outline-access-time"></i> 48 Minute Ago</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </a>

            <a href="single-job-page.html" class="utf-job-listing">
                <div class="utf-job-listing-details">
                    <div class="utf-job-listing-company-logo"> <img src="images/company_logo_4.png" alt="">
                    </div>
                    <div class="utf-job-listing-description">
                        <span class="dashboard-status-button utf-job-status-item green"><i
                                class="icon-material-outline-business-center"></i> Trạng thái</span>
                        <i class="far fa-clock time-apply" style="padding-left: 253px;"></i> <span>25-08-2021 22:12PM</span>

                        <h3 class="utf-job-listing-title">Head of Developers & MySQL Developers <span class="utf-verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h3>
                        <div class="utf-job-listing-footer">
                            <ul>
                                <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                                <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000
                                </li>
                                <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676
                                </li>
                                <li><i class="icon-material-outline-access-time"></i> 55 Minute Ago</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </a>


            <a href="single-job-page.html" class="utf-job-listing">
                <div class="utf-job-listing-details">
                    <div class="utf-job-listing-company-logo"> <img src="images/company_logo_5.png" alt="">
                    </div>
                    <div class="utf-job-listing-description">
                        <span class="dashboard-status-button utf-job-status-item green"><i
                                class="icon-material-outline-business-center"></i> Trạng thái</span>
                        <i class="far fa-clock time-apply" style="padding-left: 253px;"></i> <span>25-08-2021 22:12PM</span>

                        <h3 class="utf-job-listing-title">Head of Developers & MySQL Developers <span class="utf-verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h3>
                        <div class="utf-job-listing-footer">
                            <ul>
                                <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                                <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000
                                </li>
                                <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676
                                </li>
                                <li><i class="icon-material-outline-access-time"></i> 55 Minute Ago</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </a>
        </div>

        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="utf-pagination-container-aera margin-top-30 margin-bottom-60">
                    <nav class="pagination">
                        <ul>
                            <li class="utf-pagination-arrow"><a href="#"><i
                                        class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                            <li><a href="#" class="current-page">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="utf-pagination-arrow"><a href="#"><i
                                        class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-3">
        <div class="utf-sidebar-container-aera">
            <a href="">
                <img src="images/banner2.png" style="border-radius: 3px;" width="100%" alt="">
            </a>

            <!-- <a href="">
                <img src="images/banner2.png" style="border-radius: 3px;" width="100%" alt="">
            </a> -->
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