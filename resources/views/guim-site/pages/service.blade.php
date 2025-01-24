@extends('guim-site.app', ['title' => 'Services'])
@section('content')

    <!-- <section> begin ============================-->
    <section>
        <div class="bg-holder overlay" style="background-image:url({{ asset ('guim-site/assets/img/background-2.jpg') }});background-position:center bottom;"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row pt-6" data-inertia='{"weight":1.5}'>
            <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Nos services ?</h1>
                <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                    <ol class="breadcrumb fs-1 ps-0 fw-bold">
                    <li class="breadcrumb-item"><a class="text-white" href="#!">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nos services</li>
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
          <div class="text-center mb-7">
            <h3 class="fs-2 fs-md-3">Nos services & produits</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
           <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0" style="background-image:url({{ asset ('guim-site/assets/img/7.jpg') }});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Emission et Gestion de cartes</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Cartes de débit et de crédit :</strong>  Solutions pour les paiements au niveau local et international.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Cartes prépayées et virtuelles :</strong>  Produits flexibles pour répondre aux besoins spécifiques des clients.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Services de personnalisation des cartes :</strong>  Intégration des fonctionnalités spécifiques, des paramètres des plafonds, et design sur mesure.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0" style="background-image:url({{ asset ('guim-site/assets/img/7.jpg') }});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Switch Monétique & Interopérabilité</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Switch national interbancaire :</strong>  Plateforme centrale permettant des transactions interbancaires rapides et fiables, incluant les retraits, paiements, et virements entre institutions financières.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Interopérabilité nationale et régionale :</strong>  Connexion avec les institutions financières et les opérateurs régionaux pour un écosystème intégré.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0 rounded-lg-ts-0 rounded-bs-0 rounded-lg-bs-lg " style="background-image:url({{ asset ('guim-site/assets/img/8.jpg') }});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  ">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Solutions pour les commerçants</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>POS (Point of Sale) :</strong>  Installation et maintenance de terminaux de paiement.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Solutions de paiement mobile pour commerçants :</strong>   Applications et systèmes adaptés aux micros, petites et moyennes entreprises.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Accompagnement technique :</strong>  Formation et support pour une intégration optimale.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0" style="background-image:url({{ asset ('guim-site/assets/img/7.jpg') }});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Sécurité et Gestion des Risques</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Gestion des risques et détection en temps réel :</strong>   Utilisation d’intelligence artificielle pour détecter les transactions frauduleuses.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>3D Secure :</strong>   Sécurisation des paiements en ligne avec authentification renforcée.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Monitoring continu :</strong>   Surveillance proactive des transactions pour une sécurité accrue.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0 rounded-lg-ts-0 rounded-bs-0 rounded-lg-bs-lg " style="background-image:url({{ asset ('guim-site/assets/img/8.jpg') }});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  ">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Automatisation et Outils de Gestion</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Automatisation du back-office :</strong>   Réduction des interventions manuelles pour des transactions fluides et précises.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Reporting analytique :</strong>   Tableaux de bord et rapports en temps réel pour les banques et partenaires.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Reporting analytique :</strong>   Tableaux de bord et rapports en temps réel pour les banques et partenaires.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0" style="background-image:url({{ asset ('guim-site/assets/img/7.jpg') }});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Produits complémentaire</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Guichets automatiques bancaires (GAB) :</strong>    Intégration de systèmes permettant des retraits, dépôts et autres services automatisés.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Passerelle de paiement e-commerce :</strong>    IConnecter les entreprises locales à l’économie numérique en leur permettant de recevoir des paiements en ligne.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'><strong>Services d’hébergement cloud sécurisé :</strong>    Fournir un environnement fiable pour stocker et traiter les données financières.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0 rounded-lg-ts-0 rounded-bs-0 rounded-lg-bs-lg " style="background-image:url({{ asset ('guim-site/assets/img/8.jpg') }});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  ">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Formation & assistance</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>La GuiM, avec son expertise locale ou en partenariat avec des Consultants et Centres de formation certifiés, offre des formations spécialisées à ses adhérents.</p>
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>La GuiM assure aussi la recherche et la veille dans ses domaines de compétence.</p>
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
      </section><!-- <section> close ============================-->
@endsection
