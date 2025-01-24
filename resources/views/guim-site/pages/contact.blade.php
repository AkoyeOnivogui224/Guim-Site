@extends('guim-site.app', ['title' => 'Qui sommes nous ?'])
@section('content')

    <!-- <section> begin ============================-->
    <section>
        <div class="bg-holder overlay" style="background-image:url({{ asset ('guim-site/assets/img/background-2.jpg') }});background-position:center bottom;"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row pt-6" data-inertia='{"weight":1.5}'>
            <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Contactez-nous</h1>
                <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                    <ol class="breadcrumb fs-1 ps-0 fw-bold">
                    <li class="breadcrumb-item"><a class="text-white" href="#!">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contactez-nous</li>
                    </ol>
                </div>
                </div>
            </div>
            </div>
        </div><!-- end of .container-->
    </section>

    <!-- <section> begin ============================-->
        <section class="bg-100">
            <div class="container">
              <div class="row align-items-stretch justify-content-center mb-4">
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="card h-100">
                    <div class="card-body px-5">
                      <h5 class="mb-3">Siège principal</h5>
                      <p class="mb-0 text-1100"> Immeuble Fria Base (Air France) 8 ème étage Almamya,<br />Kaloum BP 2504 Conakry,<br />Rep. de Guinée.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="card h-100">
                    <div class="card-body px-5">
                      <h5 class="mb-3">Horaires</h5>
                      <p class="mb-0 text-1100"> Lundi- Vendredi : 08H00 - 17H00<br />Samedi - Dimanche : FERMER, <br /><strong>E-mail : contact@guim-gn.com</strong> <br> <strong>Téléphone : +224 620 000 000</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="card h-100">
                    <div class="card-body px-5">
                      <h5>Liens socials</h5><a class="d-inline-block mt-2" href="#!"><span class="fab fa-linkedin fs-2 me-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-twitter-square fs-2 mx-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-facebook-square fs-2 mx-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-google-plus-square fs-2 ms-2 text-primary"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body p-5 h-100">
                  <div class="googlemap" data-gmap="data-gmap" data-latlng="48.8583701,2.2922873,17" data-scrollwheel="false" data-icon="{{ asset ('guim-site/assets/img/map-marker.png') }}" data-zoom="17" data-theme="Tripitty">
                    <div class="marker-content py-3">
                      <h5>Eiffel Tower</h5>
                      <p class="mb-0">Gustave Eiffel's iconic, wrought-iron 1889 tower,<br /> with steps and elevators to observation decks.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body h-100 p-5">
                  <h5 class="mb-3">Laisser nous un message</h5>
                  <form>
                    <div class="mb-4"><input class="form-control bg-white" type="text" placeholder="Votre nom & prénoms ici ..." required="required" /></div>
                    <div class="mb-4"><input class="form-control bg-white" type="email" placeholder="Votre adresse email ici ..." required="required" /></div>
                    <div class="mb-4"><textarea class="form-control bg-white" rows="11" placeholder="Votre message ici ..." required="required"></textarea></div><button class="btn btn-md-lg btn-primary" type="Submit"> <span class="color-white fw-600">Envoyer le message</span></button>
                  </form>
                </div>
              </div>
            </div><!-- end of .container-->
          </section><!-- <section> close ============================-->
          <!-- ============================================-->

        </main><!-- ===============================================-->
        <!--    End of Main Content-->
@endsection
