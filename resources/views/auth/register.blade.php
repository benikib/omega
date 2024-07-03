<x-laravel-ui-adminlte::adminlte-layout>

    <body class="hold-transition register-page" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Omega Corporation</b></a>
            </div>

            <div class="card">
                <div class="card-body register-card-body">
                    <h2 class="login-box-msg primary">S'inscrire</h2>

                    <form method="post" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group mb-2">
                            <input type="text" name="nom"
                                class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom complet') }}"
                                placeholder="nom">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="telephone"
                                class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}"
                                placeholder="telephone">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="input-group mb-3">
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-12">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                    J'accepte les <a href="#" target="_blank" >conditions générales</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->

                                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <a href="{{ route('login') }}" class="text-center mb-3"> Vous avez déja un compte</a>
                </div>

                <!-- /.form-box -->
            </div><!-- /.card -->

            <!-- /.form-box -->
        </div>
        <!-- /.register-box -->
    </body>
</x-laravel-ui-adminlte::adminlte-layout>
