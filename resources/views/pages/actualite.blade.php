@extends('layouts.pag')
@section('content')
<div class="mt-5">
  </div>
<section class="pt-3 pb-4" id="count-stats">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 mx-auto py-3">
            <div class="row">
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-info"><span id="state1" countTo="70">{{count($formations)}}</span></h1>
                  <h5 class="mt-3">Formations</h5>
                  <p class="text-sm font-weight-normal"></p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-info"> <span id="state2" countTo="15">0</span></h1>
                  <h5 class="mt-3">Projects</h5>
                  <p class="text-sm font-weight-normal"></p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-info" id="stat e3" countTo="4">{{count($autres)}}</h1>
                  <h5 class="mt-3">Autres</h5>
                  <p class="text-sm font-weight-normal"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="">



      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky  text-dark pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3> Formations</h3>
              <h6 class="text-secondary font-weight-normal pe-3">Nous nous efforçons de fournir une expérience de formation professionnelle en s'appuyant sur des méthodologies et des meilleures pratiques reconnues.</h6>
            </div>
          </div>
          <div class="col-lg-9">

          @forelse ($formations as $i => $formation)
             @if ($i % 3 == 0)
             <div class="row">
            @endif


              <div class="col-md-4 mt-md-0">
                <a href="{{route('reserver', ['id'=>$formation->id])}}">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                <img class="w-100 my-100" src="{{ Storage::url($formation->path) }}" alt="hero" style="width: 160px; height: 160px;">
                </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">{{$formation->title}}</h6>
                    <p class="text-secondary text-sm">{{$formation->description}}</p>
                  </div>
                </a>
              </div>
              @empty
             @endforelse
            </div>


          </div>





          </div>
        </div>
        <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3> Quiz</h3>
              <h6 class="text-secondary font-weight-normal pe-3">Nous nous efforçons de fournir une expérience de formation professionnelle en s'appuyant sur des méthodologies et des meilleures pratiques reconnues.</h6>
            </div>
          </div>
          <div class="col-lg-9">

          @forelse ($autres as $i => $autre)
             @if ($i % 3 == 0)
             <div class="row">
            @endif


              <div class="col-md-4 mt-md-0">
                <a href="{{route('activites.jeux',['id'=>$autre->id])}}">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                <img class="w-100 my-100" src="{{ Storage::url('images/equipes.jpeg') }}" alt="autre" style="width: 160px; height: 160px;">
                </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0 text-dark">{{$autre->title}}</h6>
                    <p class="text-secondary text-sm">{{$autre->description}}</p>
                  </div>
                </a>
              </div>
              @empty
             @endforelse
            </div>


          </div>

          </div>
        </div>
      </div>
</section>

@endsection
