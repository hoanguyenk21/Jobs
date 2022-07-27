@extends('client.layout.layout')
@section('title', 'Trang chủ')
@section('main-content')

<!-- Intro Banner  -->
<div class="intro-banner" data-background-image="images/home-background-01.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="utf-banner-headline-text-part">
          <h3>Tìm kiếm công việc ngay <span class="typed-words"></span></h3>
          <span>Hãy tìm ngay cho bạn 1 công việc phù hợp nhất.</span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="utf-intro-banner-search-form-block margin-top-40">
          <div class="utf-intro-search-field-item">
            <i class="icon-feather-search"></i>
            <input id="intro-keywords" type="text" placeholder="Tìm kiếm công việc...">
          </div>
          <div class="utf-intro-search-field-item">
            <select class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5"
              title="Chọn địa điểm">
              <option>Afghanistan</option>
              <option>Albania</option>
              <option>Algeria</option>
              <option>Brazil</option>
              <option>Burundi</option>
              <option>Bulgaria</option>
              <option>Germany</option>
              <option>Grenada</option>
              <option>Guatemala</option>
              <option>Iceland</option>
            </select>
          </div>
          <div class="utf-intro-search-field-item">
            <select class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5"
              title="Chọn ngành nghề">
              <option>Customer Service</option>
              <option>Data Analytics</option>
              <option>Web Designing</option>
              <option>Software Developing</option>
              <option>Networking</option>
              <option>Sales & Marketing</option>
            </select>
          </div>
          <div class="utf-intro-search-button">
            <button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-leftside.html'"><i
                class="icon-material-outline-search"></i> Tìm Kiếm</button>
          </div>
        </div>
        <p class="utf-trending-silver-item"><span class="utf-trending-black-item">Tìm kiếm hàng đầu:</span> <a
            href="#">Web Designer</a> <a href="#">Web Developer</a> <a href="#">Graphic Designer</a> <a href="#">PHP
            Developer</a> <a href="#">IOS Developer</a> <a href="#">Android Developer</a></p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <ul class="intro-stats margin-top-45 hide-under-992px">
          <li><i class="icon-material-outline-business-center"></i> <sub class="counter_item"><strong
                class="counter">90</strong> <span>Công việc</span></sub> </li>
          <li><i class="icon-material-outline-assignment"></i> <sub class="counter_item"><strong
                class="counter">180</strong> <span>Ứng viên</span></sub> </li>
          <li><i class="icon-material-outline-library-books"></i> <sub class="counter_item"><strong
                class="counter">24</strong> <span>Nhà tuyển dụng</span></sub> </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<!-- Latest Jobs -->
<div class="section gray padding-top-60 padding-bottom-60">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
          <span>Công việc phù hợp với bạn</span>
          <h3>Công việc bạn có thể quan tâm</h3>
          <div class="utf-headline-display-inner-item">Bài Đăng Việc Làm Mới Nhất</div>
          <p class="utf-slogan-text">Hãy lướt xem 1 vài công việc mà chúng tôi liệt kê phía dưới cho bạn.</p>
        </div>
        <div class="utf-listings-container-part compact-list-layout margin-top-35">
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                  </ul>
                </div>
              </div>
              <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_2.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">PHP Developer, Team of PHP & IT Co <span class="utf-verified-badge"
                    title="Verified" data-tippy-placement="top"></span></h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> UI/UX Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 25 Minute Ago</li>
                  </ul>
                </div>
              </div>
              <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_3.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item yellow"><i
                    class="icon-material-outline-business-center"></i> Part Time</span>
                <h3 class="utf-job-listing-title">Website Developer & Software Developer</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 38 Minute Ago</li>
                  </ul>
                </div>
              </div>
              <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_4.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Application Developer & Web Designer <span class="utf-verified-badge"
                    title="Verified" data-tippy-placement="top"></span></h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Web Developer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 55 Minute Ago</li>
                  </ul>
                </div>
              </div>
              <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_5.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">IT Department Manager & Blogger-Entrepenour</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Android Developer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 1 Days Ago</li>
                  </ul>
                </div>
              </div>
              <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_6.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Frontend/Backendd Developer</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> IOS Developer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 1 Days Ago</li>
                  </ul>
                </div>
              </div>
              <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
            </div>
          </a>
        </div>
        <div class="utf-centered-button margin-top-10">
          <a href="jobs-list-layout-leftside.html"
            class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-20">Browse All Jobs <i
              class="icon-feather-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Latest Jobs / End -->

<!-- Latest Jobs -->
<div class="section gray padding-top-60 padding-bottom-60">
  <div class="container">
    <div class="row">
      <div class="col-xl-6">
        <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
          <span>Công việc mới nhất</span>
        </div>
        <div class="utf-listings-container-part compact-list-layout margin-top-35">
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
          <span>Công việc hot nhất</span>
        </div>
        <div class="utf-listings-container-part compact-list-layout margin-top-35">
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
          <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
            <div class="utf-job-listing-details">
              <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
              <div class="utf-job-listing-description">
                <span class="dashboard-status-button utf-job-status-item green"><i
                    class="icon-material-outline-business-center"></i> Full Time</span>
                <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                <div class="utf-job-listing-footer">
                  <ul>
                    <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                    <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                    <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                    <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Latest Jobs / End -->

<!-- Testimonials -->
<div class="section gray padding-top-65 padding-bottom-65">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="utf-section-headline-item centered margin-top-0 margin-bottom-30">
          <span>Các KOL nói gì về chúng tôi</span>
          <h3>REVIEW</h3>
          <div class="utf-headline-display-inner-item">Các KOL nói gì về chúng tôi</div>
          <p class="utf-slogan-text">Một số chia sẻ từ người nổi tiếng với website của chúng tôi.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Categories Carousel -->
  <div class="utf-carousel-container-block">
    <div class="utf-testimonial-carousel-block testimonials">
      <div class="utf-carousel-review-item">
        <div class="utf-testimonial-box">
          <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_1.jpg" alt=""> </div>
          <div class="utf-testimonial-author-utf-detail-item">
            <h4>Trần Kiên</h4>
            <span>Graphics Designer</span>
          </div>
          <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem
            Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and
            laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not
            only five into electronic type setting popularised.</div>
        </div>
      </div>
      <div class="utf-carousel-review-item">
        <div class="utf-testimonial-box">
          <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_2.jpg" alt=""> </div>
          <div class="utf-testimonial-author-utf-detail-item">
            <h4>Khun Chục</h4>
            <span>IOS Developer</span>
          </div>
          <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem
            Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and
            laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not
            only five into electronic type setting popularised.</div>
        </div>
      </div>
      <div class="utf-carousel-review-item">
        <div class="utf-testimonial-box">
          <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_3.jpg" alt=""> </div>
          <div class="utf-testimonial-author-utf-detail-item">
            <h4>Chun Vũ</h4>
            <span>Android Developer</span>
          </div>
          <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem
            Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and
            laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not
            only five into electronic type setting popularised.</div>
        </div>
      </div>
      <div class="utf-carousel-review-item">
        <div class="utf-testimonial-box">
          <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_1.jpg" alt=""> </div>
          <div class="utf-testimonial-author-utf-detail-item">
            <h4>Thái Hòa</h4>
            <span>Web Developer</span>
          </div>
          <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem
            Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and
            laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not
            only five into electronic type setting popularised.</div>
        </div>
      </div>
      <div class="utf-carousel-review-item">
        <div class="utf-testimonial-box">
          <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_2.jpg" alt=""> </div>
          <div class="utf-testimonial-author-utf-detail-item">
            <h4>Chí Võ</h4>
            <span>UI/UX Designer</span>
          </div>
          <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem
            Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and
            laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not
            only five into electronic type setting popularised.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials / End -->

<!-- Start Need Any Help -->
<section class="section padding-top-65 padding-bottom-75">
  <div class="container">
    <div class="col-xl-12">
      <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
        <span>Dịch Vụ Hỗ Trợ Trực Tuyến</span>
        <h3>Bạn Cần Sự Trợ Giúp?</h3>
        <div class="utf-headline-display-inner-item">Dịch Vụ Hỗ Trợ Trực Tuyến</div>
        <p class="utf-slogan-text">Hãy liên hệ với chúng tôi nếu bạn cần sự trợ giúp. Chúng tôi luôn săn sàng phục
          vụ bạn!</p>
      </div>
    </div>
    <div class="row need-help-area justify-content-center">
      <div class="col-xl-4">
        <div class="info-box-1">
          <div class="utf-icon-box-circle">
            <div class="utf-icon-box-circle-inner"> <i class="icon-brand-rocketchat"></i></div>
          </div>
          <h4>Trò chuyện với chúng tôi</h4>
          <p>Trò chuyện với chúng tôi trực tuyến nếu bạn có bất kỳ câu hỏi nào.</p>
          <a href="javascript:void(0);" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Chat
            ngay <i class="icon-feather-chevrons-right"></i></a>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="info-box-1">
          <div class="utf-icon-box-circle">
            <div class="utf-icon-box-circle-inner"> <i class="icon-feather-phone"></i></div>
          </div>
          <h4>Gọi cho chúng tôi</h4>
          <p>Hãy gọi cho chúng tôi nếu bạn gặp khó khăn. Các nhân viên sẽ giúp đỡ bạn!</p>
          <a href="contact.html" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Liên hệ
            ngay <i class="icon-feather-chevrons-right"></i></a>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="info-box-1">
          <div class="utf-icon-box-circle">
            <div class="utf-icon-box-circle-inner"> <i class="icon-brand-bimobject"></i></div>
          </div>
          <h4>Góp ý với chúng tôi</h4>
          <p>Hãy góp ý cho chúng tôi nếu bạn không hài lòng về trải nghiệm trên Website.</p>
          <a href="blog-right-sidebar.html"
            class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Góp ý ngay <i
              class="icon-feather-chevrons-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Need Any Help -->

<!-- Counters -->
<div class="section gradient_item_area padding-top-70 padding-bottom-75">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
          <span>Thành tích của chúng tôi</span>
          <h3>Thông số</h3>
          <div class="utf-headline-display-inner-item">Thành tích của chúng tôi</div>
          <p class="utf-slogan-text">Thành tích mà chúng tôi đã đạt được trong thời gian qua là nhờ sự ủng hộ của
            các bạn. Cảm ơn tất cả!</p>
        </div>
      </div>
      <div class="col-xl-12 counter_inner_block">
        <div class="utf-counters-container-aera">
          <div class="col-xl-3">
            <div class="utf-single-counter"> <i class="icon-feather-briefcase"></i>
              <div class="utf-counter-inner-item">
                <h3><span class="counter">90</span></h3>
                <span class="utf-counter-title">Công việc</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="utf-single-counter"> <i class="icon-feather-users"></i>
              <div class="utf-counter-inner-item">
                <h3><span class="counter">123</span></h3>
                <span class="utf-counter-title">Ứng viên</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="utf-single-counter"> <i class="icon-material-outline-textsms"></i>
              <div class="utf-counter-inner-item">
                <h3><span class="counter">11</span></h3>
                <span class="utf-counter-title">Đang hoạt động</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="utf-single-counter"> <i class="icon-material-outline-location-city"></i>
              <div class="utf-counter-inner-item">
                <h3><span class="counter">24</span></h3>
                <span class="utf-counter-title">Nhà tuyển dụng</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Counters / End -->

<!-- Subscribe Block Start -->
<section class="utf_cta_area_item utf_cta_area2_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="utf_subscribe_block">
          <div class="col-xl-8 col-md-7">
            <div class="section-heading">
              <h2 class="utf_sec_title_item utf_sec_title_item2">Theo dõi bản tin của chúng tôi!</h2>
              <p class="utf_sec_meta">Đăng ký để nhận được các bản cập nhật và thông tin mới nhất.</p>
            </div>
          </div>
          <div class="col-xl-4 col-md-5">
            <div class="contact-form-action">
              <form method="post">
                <i class="icon-material-baseline-mail-outline"></i>
                <input class="form-control" type="email" placeholder="Nhập vào email..." required="">
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