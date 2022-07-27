@extends('client.layout.layout')
@section('title', 'Trang cá nhân')
@section('main-content')

<!-- Titlebar -->
<div class="single-page-header" data-background-image="images/single-company.jpg">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="utf-single-page-header-inner-aera">
                <div class="utf-left-side">
                    <div class="utf-header-image"><img src="images/company_logo_7.png" alt=""></div>
                    <div class="utf-header-details">
                        <ul>
                            <li>Hoài Đức - Hà Nội <img class="flag" src="images/flags/af.svg" alt=""
                                    title="Afghanistan" data-tippy-placement="top"></li>
                        </ul>
                        <h3>Trần Hữu Kiên</h3>
                        <h4 class="text-muted"><i class="icon-material-outline-business-center"></i>
                            Công nghệ thông tin
                        </h4>
                        <h5><i class="icon-material-outline-location-on"></i> Hoài Đức - Hà Nội
                        </h5>
                        <h5><i class="icon-line-awesome-mobile-phone"></i> 086 89 83 309</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Page Content -->
<div class="container">
<div class="row">
    <div class="col-xl-8 col-lg-8 utf-content-right-offset-aera">
        <div class="utf-single-page-section-aera">
            <div class="utf-boxed-list-headline-item">
                <h3><i class="icon-feather-info"></i> Thông tin cơ bản</h3>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has
                been the
                industry's standard dummy text ever since, when an unknown printer took a galley of type and
                scrambled it
                to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus
                PageMaker including versions of Lorem Ipsum.</p>
            <ul class="utf-job-deatails-content-item">
                <li><i class="icon-feather-arrow-right"></i> Praesent congue erat at massa. Sed cursus
                    turpis vitae
                    tortor. Donec posuere vulputate arcu.</li>
                <li><i class="icon-feather-arrow-right"></i> Donec elit libero, sodales nec, volutpat a,
                    suscipit non,
                    turpis. Nullam sagittis.</li>
                <li><i class="icon-feather-arrow-right"></i> Pellentesque auctor neque nec urna. Proin
                    sapien ipsum, porta
                    a, auctor quis, euismod ut, mi.</li>
                <li><i class="icon-feather-arrow-right"></i> Pellentesque habitant morbi tristique senectus
                    et netus et
                    malesuada fames ac turpis egestas.</li>
            </ul>
            <div class="utf-detail-social-sharing margin-top-25">
                <span><strong>Social Sharing:-</strong></span>
                <ul class="margin-top-15">
                    <li><a href="#" title="Facebook" data-tippy-placement="top"><i
                                class="icon-brand-facebook-f"></i></a>
                    </li>
                    <li><a href="#" title="Twitter" data-tippy-placement="top"><i
                                class="icon-brand-twitter"></i></a></li>
                    <li><a href="#" title="LinkedIn" data-tippy-placement="top"><i
                                class="icon-brand-linkedin-in"></i></a>
                    </li>
                    <li><a href="#" title="Google Plus" data-tippy-placement="top"><i
                                class="icon-brand-google"></i></a>
                    </li>
                    <li><a href="#" title="Whatsapp" data-tippy-placement="top"><i
                                class="icon-brand-whatsapp"></i></a></li>
                    <li><a href="#" title="Pinterest" data-tippy-placement="top"><i
                                class="icon-brand-pinterest-p"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="utf-single-page-section-aera">
            <div class="utf-boxed-list-headline-item">
                <h3><i class="icon-feather-info"></i> Học vấn & Kinh nghiệm & Kỹ năng</h3>
            </div>
            <ul class="utf-job-deatails-content-item">
                <li><i class="icon-feather-arrow-right"></i> Praesent congue erat at massa. Sed cursus
                    turpis vitae
                    tortor. Donec posuere vulputate arcu.</li>
                <li><i class="icon-feather-arrow-right"></i> Donec elit libero, sodales nec, volutpat a,
                    suscipit non,
                    turpis. Nullam sagittis.</li>
                <li><i class="icon-feather-arrow-right"></i> Pellentesque auctor neque nec urna. Proin
                    sapien ipsum, porta
                    a, auctor quis, euismod ut, mi.</li>
                <li><i class="icon-feather-arrow-right"></i> Pellentesque habitant morbi tristique senectus
                    et netus et
                    malesuada fames ac turpis egestas.</li>
            </ul>
        </div>

        <div class="utf-single-page-section-aera">
            <div class="utf-boxed-list-headline-item">
                <h3><i class="icon-feather-info"></i> Khác</h3>
            </div>
            <ul class="utf-job-deatails-content-item">
                <li><i class="icon-feather-arrow-right"></i> Praesent congue erat at massa. Sed cursus
                    turpis vitae
                    tortor. Donec posuere vulputate arcu.</li>
                <li><i class="icon-feather-arrow-right"></i> Donec elit libero, sodales nec, volutpat a,
                    suscipit non,
                    turpis. Nullam sagittis.</li>
                <li><i class="icon-feather-arrow-right"></i> Pellentesque auctor neque nec urna. Proin
                    sapien ipsum, porta
                    a, auctor quis, euismod ut, mi.</li>
                <li><i class="icon-feather-arrow-right"></i> Pellentesque habitant morbi tristique senectus
                    et netus et
                    malesuada fames ac turpis egestas.</li>
            </ul>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="col-xl-4 col-lg-4">
        <div class="utf-sidebar-container-aera">
            <div class="utf-sidebar-widget-item">
                <h3>Quick Contacts</h3>
                <form method="post" name="contactform" id="contact">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="utf-no-border">
                                <input class="utf-with-border" name="fristname" type="text" id="fristname"
                                    placeholder="Frist Name" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="utf-no-border">
                                <input class="utf-with-border" name="lastname" type="text" id="lastname"
                                    placeholder="Last Name" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="utf-no-border">
                                <input class="utf-with-border" name="email" type="email" id="email"
                                    placeholder="Email Address" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="utf-no-border">
                                <input class="utf-with-border" name="subject" type="text" id="subject"
                                    placeholder="Subject" required />
                            </div>
                        </div>
                    </div>
                    <div>
                        <textarea class="utf-with-border" name="comments" cols="40" rows="2" id="comments"
                            placeholder="Message..." required></textarea>
                    </div>
                    <div class="utf-centered-button margin-top-10">
                        <input type="submit" class="submit button margin-bottom-10" id="submit"
                            value="Submit Message" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection