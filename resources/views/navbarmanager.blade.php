
<header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="/dashboard/home" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span><img src="{{ asset('dist/unram.png') }}" width="50"> </span><strong> E-TOR</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>TOR</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->

                <!-- Logout    -->
                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
