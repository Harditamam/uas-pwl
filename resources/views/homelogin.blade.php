@include('header')

  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1><center><img src="{{ asset('admin/unram.png') }}" width="300"></center></h1>
                  </div>
                  <p><center><font color="#FFD700" size="4">Aplikasi Penginputan Nilai Siswa SMA Negeri 1 Tanjung</font></center></p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                    <form method="POST" class="form-validate" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="input-material @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      <label for="login-username" class="label-material">Email</label>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="input-material @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      <label for="login-password" class="label-material">Password</label>
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div><button type="submit" class="btn btn-info btn-lg">
                        {{ __('Login') }}
                    </button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
    </div>
     @include('footer')
