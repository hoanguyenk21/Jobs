@extends('client.layout.layout')
@section('title', 'Chi tiết công việc')
@section('main-content')

<!-- Titlebar -->
<div class="single-page-header" data-background-image="images/single-job.jpg">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="utf-single-page-header-inner-aera">
        <div class="utf-left-side">
          <div class="utf-header-image"><a href="single-company-profile.html"><img src="images/company_logo_1.png"
                alt=""></a></div>
          <div class="utf-header-details">
            <span class="dashboard-status-button utf-job-status-item green"><i
                class="icon-material-outline-business-center"></i> Full Time</span>
            <ul>
              <li>Afghanistan <img class="flag" src="images/flags/af.svg" alt="" title="Afghanistan"
                  data-tippy-placement="top"></li>
            </ul>
            <h3>Business Manager <span class="utf-verified-badge" title="Verified"
                data-tippy-placement="top"></span></h3>
            <h5><i class="icon-material-outline-business-center"></i> Web Designer</h5>
            <div class="utf-star-rating" data-rating="4.9"></div>
          </div>
        </div>
        <div class="utf-right-side">
          <div class="salary-box">
            <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-top-0">Ứng tuyển ngay <i
                class="icon-feather-chevron-right"></i></a>
            <a href="#" class="button save-job-btn margin-top-20">Lưu công việc <i
                class="icon-feather-chevron-right"></i></a>
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
      <div class="job-description-image-aera">
        <img src="images/job-detail-inner.png" alt="" />
      </div>
      <div class="utf-boxed-list-headline-item">
        <h3><i class="icon-material-outline-description"></i> Jobs Description</h3>
      </div>
      <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the
        digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information
        highway will close the loop on focusing solely on the bottom line.</p>
      <ul class="utf-job-deatails-content-item margin-bottom-30">
        <li><i class="icon-feather-arrow-right"></i> Morbi mattis ullamcorper velit. Phasellus gravida semper nisi
          nullam vel sem.</li>
        <li><i class="icon-feather-arrow-right"></i> Phasellus viverra nulla ut metus varius laoreet. Quisque
          rutrum. Aenean imperdiet.</li>
        <li><i class="icon-feather-arrow-right"></i> Etiam ultricies nisi vel augue. Curabitur ullamcorper
          ultricies nisi. Nam eget dui. Etiam rhoncus.</li>
        <li><i class="icon-feather-arrow-right"></i> Donec mollis hendrerit risus. Phasellus nec sem in justo
          pellentesque facilisis.</li>
        <li><i class="icon-feather-arrow-right"></i> Praesent congue erat at massa. Sed cursus turpis vitae
          tortor. Donec posuere vulputate arcu.</li>
        <li><i class="icon-feather-arrow-right"></i> Donec elit libero, sodales nec, volutpat a, suscipit non,
          turpis. Nullam sagittis.</li>
        <li><i class="icon-feather-arrow-right"></i> Pellentesque auctor neque nec urna. Proin sapien ipsum, porta
          a, auctor quis, euismod ut, mi.</li>
        <li><i class="icon-feather-arrow-right"></i> Pellentesque habitant morbi tristique senectus et netus et
          malesuada fames ac turpis egestas.</li>
      </ul>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-sm-12">
          <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-top-0">Apply Now <i
              class="icon-feather-chevron-right"></i></a>
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-12">
          <a href="#" class="button save-job-btn">Get Job Alerts <i class="icon-feather-chevron-right"></i></a>
        </div>
      </div>
      <div class="utf-detail-social-sharing margin-top-25">
        <span><strong>Social Sharing:-</strong></span>
        <ul class="margin-top-15">
          <li><a href="#" title="Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a>
          </li>
          <li><a href="#" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
          <li><a href="#" title="LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a>
          </li>
          <li><a href="#" title="Google Plus" data-tippy-placement="top"><i class="icon-brand-google"></i></a>
          </li>
          <li><a href="#" title="Whatsapp" data-tippy-placement="top"><i class="icon-brand-whatsapp"></i></a></li>
          <li><a href="#" title="Pinterest" data-tippy-placement="top"><i class="icon-brand-pinterest-p"></i></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="utf-single-page-section-aera">
      <div class="utf-boxed-list-headline-item">
        <h3><i class="icon-material-outline-location-on"></i> Jobs Location</h3>
      </div>
      <div id="utf-single-job-map-container-item">
        <div id="singleListingMap" data-latitude="48.8566" data-longitude="2.3522"
          data-map-icon="im im-icon-Hamburger"></div>
      </div>
    </div>

    <div class="utf-boxed-list-item margin-bottom-60">
      <div class="utf-boxed-list-headline-item">
        <h3><i class="icon-material-outline-business-center"></i> People Also Viewed</h3>
      </div>
      <div class="utf-listings-container-part compact-list-layout">
        <a href="single-job-page.html" class="utf-job-listing">
          <div class="utf-job-listing-details">
            <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
            <div class="utf-job-listing-description">
              <span class="dashboard-status-button utf-job-status-item green"><i
                  class="icon-material-outline-business-center"></i> Full Time</span>
              <h3 class="utf-job-listing-title">Website Developer & Software Developer</h3>
              <div class="utf-job-listing-footer">
                <ul>
                  <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                  <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                  <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                  <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                </ul>
              </div>
            </div>
          </div>
          <span class="bookmark-icon"></span>
        </a>
        <a href="single-job-page.html" class="utf-job-listing">
          <div class="utf-job-listing-details">
            <div class="utf-job-listing-company-logo"> <img src="images/company_logo_2.png" alt=""> </div>
            <div class="utf-job-listing-description">
              <span class="dashboard-status-button utf-job-status-item green"><i
                  class="icon-material-outline-business-center"></i> Full Time</span>
              <h3 class="utf-job-listing-title">Head of Developers & MySQL Developers</h3>
              <div class="utf-job-listing-footer">
                <ul>
                  <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                  <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                  <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                  <li><i class="icon-material-outline-access-time"></i> 30 Minute Ago</li>
                </ul>
              </div>
            </div>
          </div>
          <span class="bookmark-icon"></span>
        </a>
        <a href="single-job-page.html" class="utf-job-listing">
          <div class="utf-job-listing-details">
            <div class="utf-job-listing-company-logo"> <img src="images/company_logo_3.png" alt=""> </div>
            <div class="utf-job-listing-description">
              <span class="dashboard-status-button utf-job-status-item green"><i
                  class="icon-material-outline-business-center"></i> Full Time</span>
              <h3 class="utf-job-listing-title">Frontend/Backendd Developer</h3>
              <div class="utf-job-listing-footer">
                <ul>
                  <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                  <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                  <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                  <li><i class="icon-material-outline-access-time"></i> 55 Minute Ago</li>
                </ul>
              </div>
            </div>
          </div>
          <span class="bookmark-icon"></span>
        </a>
        <a href="single-job-page.html" class="utf-job-listing">
          <div class="utf-job-listing-details">
            <div class="utf-job-listing-company-logo"> <img src="images/company_logo_4.png" alt=""> </div>
            <div class="utf-job-listing-description">
              <span class="dashboard-status-button utf-job-status-item yellow"><i
                  class="icon-material-outline-business-center"></i> Part Time</span>
              <h3 class="utf-job-listing-title">Application Developer & Web Designer</h3>
              <div class="utf-job-listing-footer">
                <ul>
                  <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                  <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                  <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                  <li><i class="icon-material-outline-access-time"></i> 1 Days Ago</li>
                </ul>
              </div>
            </div>
          </div>
          <span class="bookmark-icon"></span>
        </a>
      </div>
      <div class="utf-centered-button margin-top-10"> <a href="jobs-list-layout-leftside.html"
          class="button utf-button-sliding-icon">View More Jobs <i class="icon-feather-chevron-right"></i></a>
      </div>
    </div>
  </div>

  <!-- Sidebar -->
  <div class="col-xl-4 col-lg-4">
    <div class="utf-sidebar-container-aera">
      <div class="utf-sidebar-widget-item">
        <div class="utf-detail-banner-add-section">
          <a href="#"><img src="images/banner-add-2.jpg" alt="banner-add-2" /></a>
        </div>
      </div>
      <div class="utf-sidebar-widget-item">
        <div class="utf-quote-box">
          <div class="utf-quote-info">
            <h4>Make a Difference with Your Online Resume!</h4>
            <p>Your Resume in Minutes with Jobs Resume Assistant is Ready!</p>
            <a href="register.html"
              class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Create an Account <i
                class="icon-feather-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="utf-sidebar-widget-item">
        <h3>Offered Salary</h3>
        <div class="utf-right-side">
          <div class="salary-box">
            <div class="salary-amount">£25,000 - £30,000</div>
          </div>
        </div>
      </div>
      <div class="utf-sidebar-widget-item">
        <div class="utf-job-overview">
          <div class="utf-job-overview-headline">Jobs Position Information</div>
          <div class="utf-job-overview-inner">
            <ul>
              <li>
                <i class="icon-material-outline-business-center"></i> <span>Job Vacancy:</span>
                <h5>PHP Developer</h5>
              </li>
              <li>
                <i class="icon-material-outline-account-circle"></i> <span>Gender</span>
                <h5>Female</h5>
              </li>
              <li>
                <i class="icon-line-awesome-glass"></i> <span>Experience</span>
                <h5>2.6 Years</h5>
              </li>
              <li>
                <i class="icon-material-outline-location-on"></i> <span>Location</span>
                <h5>Bothell, WA, USA</h5>
              </li>
              <li>
                <i class="icon-material-outline-business-center"></i> <span>Jobs Type</span>
                <h5>Full Time</h5>
              </li>
              <li>
                <i class="icon-line-awesome-gg-circle"></i> <span>Qualification</span>
                <h5>Bachelor Degree</h5>
              </li>
              <li>
                <i class="icon-material-outline-access-time"></i> <span>Date Posted</span>
                <h5>2 days ago</h5>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="utf-sidebar-widget-item">
        <h3>Tags Cloud</h3>
        <div class="task-tags">
          <a href="#"><span>Business</span></a>
          <a href="#"><span>Investment </span></a>
          <a href="#"><span>Audit</span></a>
          <a href="#"><span>Assurance</span></a>
          <a href="#"><span>Consulting </span></a>
          <a href="#"><span>Partnership</span></a>
          <a href="#"><span>Secutity</span></a>
          <a href="#"><span>Camera</span></a>
        </div>
      </div>

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
                <input class="utf-with-border" name="lastname" type="text" id="lastname" placeholder="Last Name"
                  required />
              </div>
            </div>
            <div class="col-md-12">
              <div class="utf-no-border">
                <input class="utf-with-border" name="email" type="email" id="email" placeholder="Email Address"
                  required />
              </div>
            </div>
            <div class="col-md-12">
              <div class="utf-no-border">
                <input class="utf-with-border" name="subject" type="text" id="subject" placeholder="Subject"
                  required />
              </div>
            </div>
          </div>
          <div>
            <textarea class="utf-with-border" name="comments" cols="40" rows="2" id="comments"
              placeholder="Message..." required></textarea>
          </div>
          <div class="utf-centered-button margin-top-10">
            <input type="submit" class="submit button" id="submit" value="Submit Message" />
          </div>
        </form>
      </div>

      <div class="utf-sidebar-widget-item">
        <h3>Bookmark Jobs</h3>
        <p class="bookmark-text-item">950 People Bookmarked Jobs</p>
        <button class="bookmark-button margin-bottom-10"> <span class="bookmark-icon"></span> <span
            class="bookmark-text">Login to Bookmark Jobs</span> <span class="bookmarked-text">Login to Bookmark
            Jobs</span> </button>
      </div>

      <div class="utf-sidebar-widget-item">
        <h3>Print Job & Report Job</h3>
        <a href="#" class="button dark">Print Jobs <i class="icon-line-awesome-print"></i></a>
        <a href="#" class="button dark">Report Jobs <i class="icon-feather-flag"></i></a>
      </div>

      <div class="utf-sidebar-widget-item">
        <div class="utf-detail-banner-add-section">
          <a href="#"><img src="images/banner-add-2.jpg" alt="banner-add-2" /></a>
        </div>
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
            <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Our Newsletter!</h2>
            <p class="utf_sec_meta">Subscribe to get latest updates and information.</p>
          </div>
        </div>
        <div class="col-xl-4 col-md-5">
          <div class="contact-form-action">
            <form method="post">
              <i class="icon-material-baseline-mail-outline"></i>
              <input class="form-control" type="email" placeholder="Enter your email" required="">
              <button class="utf_theme_btn" type="submit">Subscribe</button>
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