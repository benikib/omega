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
          <h2 class="text-white mb-0">{{$formation->title}}</h3>
          <h4 class="text-white">{{$formation->title}}</h3>
          <p class="text-white  text-sm mb-5">{{$formation->description}}</p>
          <div class="card-body">
              <form role="form" class="text-start" method="post" action="{{ url('reserver') }}">
                @csrf
                <div class="input-group input-group-outline my-3">

                  <input type="hidden" name="user_id" value="{{  Auth::user()->id }}">
                  <input type="hidden" name="formation_id" value="{{  $formation->id }}">
                  </div>
                  <div class="text-center text-white">
                    @if($re_already)
                    <p >Merci ! </p>
                    @else
                    <button type="submit" class="btn bg-gradient-light   shadow-secondary shadow-lg btn-lg mb-3 mb-sm-0">Reserver</button>
                    @endif

                </div>

            </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container">

  </div>
</section>
@endsection
