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
                    <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Qui sommes nous ?</h1>
                    <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                      <ol class="breadcrumb fs-1 ps-0 fw-bold">
                        <li class="breadcrumb-item"><a class="text-white" href="#!">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Qui sommes nous ?</li>
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
              <div class="row g-0">
                <div class="col-lg-4 py-3 py-lg-0 position-relative" style="min-height:400px; background-position: top">
                  <div class="bg-holder rounded-ts-lg rounded-lg-bs-lg rounded-te-lg rounded-lg-te-0" style="background-image:url({{ asset ('guim-site/assets/img/ceo.jpg') }});"></div>
                  <!--/.bg-holder-->
                </div>
                <div class="col-lg-8 px-5 py-6 my-lg-0 bg-white rounded-lg-te-lg rounded-be-lg rounded-bs-lg rounded-lg-bs-0 d-flex align-items-center">
                  <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'>Méssage de la Direction Général</h5>
                    <p class="my-4" data-zanim-xs='{"delay":0.1}'>Elixir co-operates with clients in solving the hardest problems they face in their businesses—and the world. We do this by channeling the diversity of our people and their thinking. </p>
                    <h5 class="text-uppercase mt-3 fw-medium mb-1" data-zanim-xs='{"delay":0.3}'>Ibrahima Kalil Touré</h5>
                    <h6 class="text-500 fw-semi-bold" data-zanim-xs='{"delay":0.4}'>Directeur Général</h6>
                  </div>
                </div>
              </div>
              <div class="row mt-6">
                <div class="col-12">
                  <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
                    <h5>Historique de GuiM</h5>
                    <p class="mt-3">As a first order business consulting firm, we help companies, foundations and individuals make a difference. Our work gets to the heart of the matter. We break silos because it takes more than any one check or policy or letter to tackle big issues like economic security, human rights or climate sustainability. We prescribe a custom formula of advocacy, collaboration, investment, philanthropy, policy and new ways of doing business in order to help you make progress.</p>
                    <blockquote class="blockquote my-5 ms-lg-6" style="max-width: 700px;">
                      <h5 class="fw-medium ms-3 mb-0">But how do we do it? We like to call it earning the right, walking the talk and playing the game &hellip;</h5>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div><!-- end of .container-->
        </section>

        <section>
            <div class="container">
              <div class="text-center mb-5">
                <h3 class="fs-2 fs-md-3">Notre équipe</h3>
                <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
              </div>
              <div class="row">
                <div class="col-sm-6 col-lg-4    ">
                  <div class="card h-100"><img class="card-img-top" src="{{ asset ('guim-site/assets/img/portrait-3.jpg') }}" alt="Reenal Scott" />
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                      <div class="overflow-hidden">
                        <h5 data-zanim-xs='{"delay":0}'>Oumar Cissé</h5>
                      </div>
                      <div class="overflow-hidden">
                        <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Responsable système</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
                  <div class="card h-100"><img class="card-img-top" src="{{ asset ('guim-site/assets/img/portrait-4.jpg') }}" alt="Lily Anderson" />
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                      <div class="overflow-hidden">
                        <h5 data-zanim-xs='{"delay":0}'>Henry Sagbe ZOUMANIGUI</h5>
                      </div>
                      <div class="overflow-hidden">
                        <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Responsable Réseaux</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
                  <div class="card h-100"><img class="card-img-top" src="{{ asset ('guim-site/assets/img/portrait-5.jpg') }}" alt="Thomas Anderson" />
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                      <div class="overflow-hidden">
                        <h5 data-zanim-xs='{"delay":0}'>Akoye ONIVOGUI</h5>
                      </div>
                      <div class="overflow-hidden">
                        <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Responsable support</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4   ">
                  <div class="card h-100"><img class="card-img-top" src="{{ asset ('guim-site/assets/img/portrait-4.jpg') }}" alt="Legartha Mantana" />
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                      <div class="overflow-hidden">
                        <h5 data-zanim-xs='{"delay":0}'>Balla Moussa TRAORE</h5>
                      </div>
                      <div class="overflow-hidden">
                        <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Responsable Fraude & Litige</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4   ">
                  <div class="card h-100"><img class="card-img-top" src="{{ asset ('guim-site/assets/img/portrait-4.jpg') }}" alt="John Snow" />
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                      <div class="overflow-hidden">
                        <h5 data-zanim-xs='{"delay":0}'>Aboubacar CAMARA</h5>
                      </div>
                      <div class="overflow-hidden">
                        <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Responsable Back Office</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4   ">
                  <div class="card h-100"><img class="card-img-top" src="{{ asset ('guim-site/assets/img/portrait-1.jpg') }}" alt="Ragner Lothbrok" />
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                      <div class="overflow-hidden">
                        <h5 data-zanim-xs='{"delay":0}'>Aboubacar Sisiki SANGARE</h5>
                      </div>
                      <div class="overflow-hidden">
                        <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Responsable Financier & Administrative</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end of .container-->
          </section>
@endsection
