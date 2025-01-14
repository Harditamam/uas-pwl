
<nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{ asset('dist/img/avatar-1.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">{{ auth()->user()->name }}</h1>
              <p>{{ auth()->user()->role }}</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            @if ( Auth::user()->role == 'admin')
              <li class="@yield('menu1')"><a href="/admin"> <i class="icon-home"></i>Beranda </a></li>
              <li class="@yield('menu2')"><a href="/admin/akun"> <i class="icon-user"></i>Akun </a></li>
              <li class="@yield('menu3')"><a href="/admin/guru"> <i class="fa fa-book"></i>Guru </a></li>
              <li class="@yield('menu4')"><a href="/admin/mapel"> <i class="fa fa-book"></i>Mapel </a></li>
              <li class="@yield('menu5')"><a href="/admin/nilai"> <i class="fa fa-book"></i>Nilai </a></li>
           @elseif ( Auth::user()->role == 'siswa')
              <li class="@yield('menu1')"><a href="/operator"> <i class="icon-home"></i>Home </a></li>
              <li class="@yield('menu2')"><a href="/operator/siswa"> <i class="fa fa-book"></i>Nilai </a></li>
            @elseif ( Auth::user()->role == 'manager')
              <li class="@yield('menu1')"><a href="/manager"> <i class="icon-home"></i>Home </a></li>
              <li class="@yield('menu4')"><a href="/manager/etor/2"> <i class="fa fa-file"></i>Data E-TOR </a></li>
              @elseif ( Auth::user()->role == 'verifikator')
              <li class="@yield('menu1')"><a href="/verifikator"> <i class="icon-home"></i>Home </a></li>
              <li class="@yield('menu3')"><a href="/verifikator/etor/1"> 
              <i class="fa fa-book"></i>Data E-tor  
                 
            </a></li>
            @endif
          </ul>
        </nav>