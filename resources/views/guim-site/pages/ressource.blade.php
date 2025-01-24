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
                <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Ressources</h1>
                <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                    <ol class="breadcrumb fs-1 ps-0 fw-bold">
                    <li class="breadcrumb-item"><a class="text-white" href="#!">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ressources</li>
                    </ol>
                </div>
                </div>
            </div>
            </div>
        </div><!-- end of .container-->
    </section>

    <section class="bg-100">
        <div class="container">
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  " style="background-image:url({{ asset ('guim-site/assets/img/6.jpg') }});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg rounded-lg-be-0 rounded-lg-te-lg ">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Paiements digitaux</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Portefeuilles électroniques :</strong>  Offrir une alternative numérique aux transactions en espèces, accessible via mobile.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Paiements QR Code et NFC :</strong>  Des solutions modernes pour les paiements sans contact.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Super Apps bancaires :</strong>  Développement de plateformes numériques regroupant services bancaires et monétiques.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-7">
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 far fa-credit-card"></span>Inclusion financière</h5>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Permettre un accès équitable aux services financiers modernes.<span class='fas fa-external-link-alt ms-1'></span></p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 fas fa-comment-alt"></span>Innovation continue</h5>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Offrir des produits alignés sur les dernières tendances technologiques.<span class='fas fa-external-link-alt ms-1'></span></a></p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 fas fa-phone-alt"></span>Fiabilité et sécurité</h5>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Garantir des transactions rapides, sécurisées et transparentes.<span class='fas fa-external-link-alt ms-1'></span></p>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>
@endsection
