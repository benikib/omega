<nav class="navbar navbar-expand-lg  blur border-radius-xl  top-0 z-index-3 shadow position-absolute  py-2 start-0 end-0 mx-4">
@if (Route::has('login'))
          <div class="container-fluid px-0">
          <div class="col-1">

          <a class="navbar-brand font-weight-bolder ms-sm-3" href="#" rel="tooltip" title="Omega Corporation" data-placement="bottom" >
          <img src="{{ Storage::url('images/Omego_logo.png')}}" class="rounded " alt="Omega" style="width: 50px; height: 50px;">

            </a>
          </div>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>

            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                @auth
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center {{ Request::is('/' ) ? 'font-weight-bold' : '' }} {{ Request::is('pages/about') ? 'font-weight-bold' : '' }} {{ Request::is('pages/contact') ? 'font-weight-bold' : '' }}" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">

                    Pages

                  </a>
                  <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                    <div class="d-none d-lg-block">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                      Pages
                      </h6>
                      <a href="{{ url('/') }}" class="dropdown-item border-radius-md {{ Request::is('/') ? 'font-weight-bold' : '' }}">
                  <span>Accueil</span>
                </a>
                <a href="{{ url('/pages/contact')}}" class="dropdown-item border-radius-md {{ Request::is('pages/contact') ? 'font-weight-bold' : '' }}">
                  <span> Nous Contactez </span>
                </a>
                <a href="{{url('/pages/about')}}" class="dropdown-item border-radius-md/pages/apropos {{ Request::is('pages/about') ? 'font-weight-bold' : '' }}">
                  <span>Apropos de nous</span>
                </a>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Compte
                </h6>
                <a href="#" class="btn btn-default btn-flat float-right"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span>Deconnexion</span>
                    </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                    </form>
                </a>
                    </div>
                    <div class="d-lg-none">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                        Landing Pages
                      </h6>
                      <a href="{{ url('/') }}" class="dropdown-item border-radius-md">
                  <span>Accueil</span>
                </a>
                <a href="{{ url('/pages/contact')}}" class="dropdown-item border-radius-md">
                  <span> Nous Contactez </span>
                </a>
                <a href="{{url('/pages/apropos')}}" class="dropdown-item border-radius-md {{ Request::is('pages/apropos') ? 'font-weight-bold' : '' }}">
                  <span>Apropos de nous</span>
                </a>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Compte
                </h6>
                <a href="#" class="btn btn-default btn-flat float-right"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span>Deconnexion</span>
                    </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                    </form>
                </a>
                    </div>
                  </div>
                </li>

          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
              Nos services
            </a>
            <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
              <div class="d-none d-lg-block">
                <ul class="list-group">
                  <li class="nav-item list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{url('/services/formations')}}">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Formation</h6>
                      <span class="text-sm">Formations</span>
                    </a>
                  </li>
                  <li class="nav-item list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('service/marketing')}}">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Marketin</h6>
                      <span class="text-sm">Marketing Digital</span>
                    </a>
                  </li>
                  <li class="nav-item list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('service/apps')}} ">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Apps</h6>
                      <span class="text-sm">Creation des applications web et mobiles</span>
                    </a>
                  </li>
                  <li class="nav-item list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Design</h6>
                      <span class="text-sm">webDesign</span>
                    </a>
                  </li>

                </ul>
              </div>

            </ul>
          </li>
      <li class="nav-item ms-lg-auto">
      <a class="nav-link nav-link-icon me-2" href="{{ url('pages/actualite') }}" target="_self">

        <p class="d-inline text-sm z-index-1 {{ Request::is('pages/actualite') ? 'font-weight-bold' : '' }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="publications">Actualite</p>
      </a>
    </li>
    @else
    <li class="nav-item ms-lg-auto">
      <a class="nav-link nav-link-icon me-2" href="{{ route('login') }}" >

        <p class="d-inline text-sm z-index-1 font-weight-bold {{ Request::is('login') ? 'font-weight-bold' : '' }}"  data-bs-placement="bottom">Login</p>
      </a>
    </li>
    @if(Route::has('register'))
        <li class="nav-item my-auto ms-3 ms-lg-0">
          <a href="{{ route('register') }}" class="nav-link nav-link-icon me-2">
            <p class="d-inline text-sm z-index-1 font-weight-bold"  data-bs-placement="bottom">S'incrire</p></a>
        </li>

        @endif
    @endauth
  </ul>
</div>
</div>
</nav>
  @endif
