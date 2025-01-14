 @include('header')

  <body>
    <div class="page">
      <!-- Main Navbar-->
      @include('navbarweb')
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        @include('sidebarweb')
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">@yield('judul')</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                @yield('konten')
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <p><center>Fakultas Ekonomi Universitas Mataram &copy; 2021</center></p>
                </div>
                <div class="col-sm-6 text-right">
                  <p></a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>


    @include('footer')
