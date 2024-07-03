<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9RV39K1MF6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9RV39K1MF6');
</script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Omega Corporation</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
        <link rel="icon" href="https://precipitous-transla.000webhostapp.com/Omego_logo.png" type="image/png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JavaScript Bundle with Popper -->

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
        



        <!-- Styles -->
    </head>
    <style>
        /* Styles pour l'écran de démarrage */
        #splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            font-family: Arial, sans-serif;
            z-index: 9999;
        }

        #splash-screen img {
            width: 200px;
            height: 200px;
            margin-bottom: 20px;
        }

        #splash-screen h1 {
            font-size: 24px;
            font-weight: normal;
            margin-bottom: 10px;
        }

        #splash-screen p {
            font-size: 14px;
            color: #666;
        }
    </style>
    <script>
        // JavaScript pour masquer l'écran de démarrage après le chargement
        window.addEventListener('load', function() {
            var splashScreen = document.getElementById('splash-screen');
            splashScreen.style.display = 'none';
        });
    </script>
    <body class="antialiased">
    <div class="splash-screen container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      @include('layouts.menupage')

      </div>
    </div>
  </div>

  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('{{ Storage::url('images/background.jpeg')}}');">
      <span class="mask bg-gradient-info opacity-3"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">Bienvenue chez Omega Corporation</h1>
            <p class="lead mb-4 text-white  h4 opacity-8">Notre entreprise informatique
              se spécialise dans la numérisation des entités telles que les écoles, les hôpitaux, etc. Nous aidons nos clients à transformer leurs opérations en développant des applications mobiles
              sur mesure, des logiciels de gestion et des sites web professionnels...</p>


            <div class="d-flex justify-content-center">
              <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>








  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6 " >
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="row justify-content-start">
              <div class="col-md-6">
                <div class="info">

                  <h5>Formation de Qualité</h5>
                  <p>Nous proposons des formations gratuites de haute qualité axées sur une approche professionnelle. Nos programmes de formation sont conçus pour fournir aux participants
                    les compétences et les connaissances nécessaires pour réussir dans leur domaine d'activité.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">

                  <h5>MARKETING DIGITAL</h5>
                  <p>Notre entreprise, Omega, propose une large gamme de services
                    dans le domaine du marketing digital, en mettant l'accent sur les jeux vidéo de haute qualité. Voici comment nous pouvons couvrir vos
                    besoins en matière de marketing numérique pour votre activité chez Omega :</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-start mt-4">
              <div class="col-md-6">
                <div class="info">

                  <h5>Application web & Mobile</h5>
                  <p>Chez Omega, nous comprenons l'importance d'avoir une application mobile à l'image de nos clients,
                    répondant à leurs besoins spécifiques et reflétant leur identité de marque. </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">

                  <h5>Webdesign</h5>
                  <p>Chez Omega, nous sommes spécialisés dans le webdesign et nous nous engageons
                    à transformer votre vision en une performance numérique exceptionnelle.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
            <div class="card">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal">
                  <a href="javascript:;">Porteur de solution numerique et innovante</a>
                </h5>
                <p class="mb-0">
                Notre travail se démarque par son excellence et son impact significatif, grâce à notre approche innovante et notre engagement inébranlable envers la qualité
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->

    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <section class="pt-4 pb-6" id="count-stats">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-8">

            <h5>PARTENARIAT</h5>
            <p>Êtes-vous à la recherche d'un partenariat stratégique ? Nous sommes ouverts à des collaborations fructueuses. Contactez-nous pour discuter
              des opportunités de partenariat et construisons ensemble un avenir prometteur.</p>
          </div>
    </section>
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  </div>


  @include('layouts.footer')

        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
