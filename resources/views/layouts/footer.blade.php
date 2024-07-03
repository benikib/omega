<footer class="footer pt-5 mt-5 opacity-8 shadow-dark border-radius-lg p-3">
  <div class="container">
    <div class=" row">
      <div class="col-md-2 mb-4 ms-auto  ">

            <img src="{{ Storage::url('images/Omego_logo.png')}}" class="rounded " alt="Omega"  style="width: 50px; height: 50px;">


        <div class="mt-4">
          <ul class="d-flex flex-row ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link pe-1" href="#" >
                <i class="fab fa-facebook text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="#">
                <i class="fab fa-twitter text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="#">
                <i class="fab fa-dribbble text-lg opacity-8"></i>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link pe-1" href="#">
                <i class="fab fa-github text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="#" >
                <i class="fab fa-youtube text-lg opacity-8"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>





      <div class="col-md-2 col-sm-6 col-6 mb-4">
      <div>
          <h6 class="text-sm">Pages</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/')}}" >
                Accueill
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('pages/contact')}}" >
                Nous Contactez
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/pages/about')}}" >
                Apropos de nous
              </a>
            </li>

            <li class="nav-item">
                 <a href="#" class="nav-link"btn btn-default btn-flat float-right"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span>Deconnexion</span>
                    </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                    </form>
                </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">services</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="#" >
                Formations
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" >
                Marketing Digital
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" >
               Apps
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" >
                Webdesign
              </a>
            </li>

          </ul>
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
        <div>
          <h6 class="text-sm">Découvrir</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('pages/actualite')" >
                Actualités
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" >
              Terms & Conditions
              </a>
            </li>


          </ul>
        </div>
      </div>

      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> Omega Corporation <a href="#" >Structure</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
