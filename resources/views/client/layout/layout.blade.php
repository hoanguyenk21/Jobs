@include('client.layout.header')

<body>
  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Header Container -->
    <header id="utf-header-container-block">
      <div id="header">
        <div class="container">
          <div class="utf-left-side">
            <div id="logo"> <a href="index-1.html"><img src="images/logo.png" alt=""></a> </div>
            @include('client.layout.navbar')
            <div class="clearfix"></div>
          </div>

          <div class="utf-right-side">
            <div class="utf-header-widget-item"> <a href="#utf-signin-dialog-block" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Sign In</span></a>
            </div>
            <div class="utf-header-widget-item">
              <div class="utf-header-notifications user-menu">
                <div class="utf-header-notifications-trigger user-profile-title">
                  <a href="#">
                    <div class="user-avatar status-online"><img src="images/user_small_1.jpg" alt=""> </div>
                    <div class="user-name">Hi, John!</div>
                  </a>
                </div>
                <div class="utf-header-notifications-dropdown-block">
                  <ul class="utf-user-menu-dropdown-nav">
                    <li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                    <li><a href="dashboard-jobs-post.html"><i class="icon-line-awesome-user-secret"></i> Manage Jobs
                        Post</a></li>
                    <li><a href="dashboard-manage-jobs.html"><i class="icon-material-outline-group"></i> Manage Jobs</a>
                    </li>
                    <li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks
                        Jobs</a></li>
                    <li><a href="dashboard-my-profile.html"><i class="icon-feather-user"></i> My Profile</a></li>
                    <li><a href="index-1.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <span class="mmenu-trigger">
              <button class="hamburger utf-hamburger-collapse-item" type="button"> <span class="utf-hamburger-box-item">
                  <span class="utf-hamburger-inner-item"></span> </span> </button>
            </span>
          </div>
        </div>
      </div>
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    @yield('main-content')

    @include('client.layout.footer')