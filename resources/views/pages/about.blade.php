@extends('layouts.pag')
@section('content')
<div class="mt-5">
  </div>
<section>
    <section class=" py-3">
        <div class="container">
          <div class="row">
            <div class="row justify-content-center text-center ">


                <h2 class="text-dark mb-0">Qui sommes nous?</h2>
                <p class="lead">Nous proposons des solutions numériques innovantes pour répondre à vos besoins. Notre expertise nous permet de développer des solutions technologiques avancées, personnalisées et orientées vers l'innovation. Nous sommes là pour vous accompagner dans votre transformation numérique et vous aider à atteindre vos objectifs.</p>
                <div class="col-lg-6">
                  <span class="badge bg-info mb-3">Omega Structure</span>
              </div>

            </div>
          </div>
        </div>

      </section>
        <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative bg-gradient-with mx-n3" >
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-start mb-5 mt-5">
              <h3 class="text-info z-index-1 position-relative">L' équipe de direction.</h3>
              <p class="  mb-0">Chez Omega Corporation, notre équipe est dynamique et hautement compétente.Elle est composée de professionnels talentueux et passionnés qui travaillent ensemble pour atteindre les objectifs de l'entreprise.
                 Notre équipe de direction possède une vaste expérience dans l'industrie et une expertise approfondie dans leurs domaines respectifs.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="card card-profile mt-4">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-12 mt-n5">
                    <a href="javascript:;">
                      <div class="p-3 pe-md-0">
                        <img class="w-100 border-radius-md shadow-lg" src="{{ Storage::url('images/avatar-4.png')}}" alt="image">
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                      <h5 class="mb-0">MANIMA MARIEN</h5>
                      <h6 class="text-info">Developpeur </h6>
                      <p class="mb-0"> je sculpte mon avenir en tant que développeur, en repoussant les limites du possible.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="card card-profile mt-lg-4 mt-5">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-12 mt-n5">
                    <a href="javascript:;">
                      <div class="p-3 pe-md-0">
                        <img class="w-100 border-radius-md shadow-lg" src="{{ Storage::url('images/avatar-1.png')}}" alt="image">
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                      <h5 class="mb-0">MPANYA SHEKINAH</h5>
                      <h6 class="text-info">UI Designe & Marketing Digital</h6>
                      <p class="mb-0"> je défie les normes, je crée des opportunités et je forge mon propre chemin vers le succès.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-6 col-12">
              <div class="card card-profile mt-4 z-index-2">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-12 mt-n5">
                    <a href="javascript:;">
                      <div class="p-3 pe-md-0">
                        <img class="w-100 border-radius-md shadow-lg" src="{{ Storage::url('images/avatar-1.png')}}" alt="image">
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                      <h5 class="mb-0">KAYEMBA BOB</h5>
                      <h6 class="text-info">Developpeur</h6>
                      <p class="mb-0"> je fusionne créativité et technologie pour donner vie à des expériences uniques en tant que développeur!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="card card-profile mt-lg-4 mt-5 z-index-2">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-12 mt-n5">
                    <a href="javascript:;">
                      <div class="p-3 pe-md-0">
                        <img class="w-100 border-radius-md shadow-lg" src="{{ Storage::url('images/avatar-1.png')}}" alt="image">
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                      <h5 class="mb-0">BENI KIBANGU </h5>
                      <h6 class="text-info">Developpeur  &  UI Designe</h6>
                      <p class="mb-0">Mon clavier est ma baguette magique en ligne, transformant des lignes de code en réalisations extraordinaires en tant que développeur.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </section>
@endsection
