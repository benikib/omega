
@extends('layouts.pag')

@section('content')
<body class="sign-in-basic {{ $isnav = true }}" >
  <!-- Navbar Transparent -->

  <!-- End Navbar -->
  <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Se connecte</h4>
                <div class="row mt-3">
                  <div class="col-2 text-center ms-auto">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-facebook text-white text-lg"></i>
                    </a>
                  </div>
                  <div class="col-2 text-center px-1">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-github text-white text-lg"></i>
                    </a>
                  </div>
                  <div class="col-2 text-center me-auto">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-google text-white text-lg"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form role="form" class="text-start" method="post" action="{{ url('/login') }}">
                @csrf
                <div class="input-group input-group-outline my-3">
                  <label class="form-label"></label>
                  <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                  class="form-control @error('email') is-invalid @enderror">
                  @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label"></label>
                  <input type="password" name="password" placeholder="Password"
                  class="form-control @error('password') is-invalid @enderror">
                   @error('password')
                      <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-check form-switch d-flex align-items-center mb-3">
                  <input class="form-check-input" type="checkbox" id="remember" checked>
                  <label class="form-check-label mb-0 ms-3" for="remember">Se souvenir de moi</label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Connexion</button>
                </div>

              </form>
              <p class="mt-4 text-sm text-center">
                <a href="{{ route('password.request') }}">Mot de passe oublier</a>
              </p>
              <p class="mt-4 text-sm text-center">
                <a href="{{ route('register') }}" class="text-center">S'inscrire</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--   Core JS Files   -->

</body>
@endsection
