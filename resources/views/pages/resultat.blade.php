@extends('layouts.pag')
@section('content')
<div class="mt-5">
  </div>
  <section class="py-sm-7" id="download-soft-ui">
  <div class="bg-gradient-info position-relative m-3 border-radius-xl overflow-hidden">
    <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
    <div class="container py-7 postion-relative z-index-2 position-relative">
      <div class="row">
        <div class="col-md-7 mx-auto text-center">
          <h1 class="text-white mb-0">{{"$jeux->title"}}</h3>
          <h2 class="text-white"> votre Score {{$re_already->score}} </h3>
          <p class="text-white  text-sm mb-2">{{$jeux->description}}</p>
          <div class="card-body">



                    <button type="submit" class="btn bg-gradient-light   shadow-secondary shadow-lg btn-lg mb-3 mb-sm-0">Voir les corrections</button>

                    <h3 class="text-white" >Merci ! </h3>
                </div>


        </div>
      </div>
    </div>
  </div>
  <div class="container">

  </div>
</section>
@endsection
