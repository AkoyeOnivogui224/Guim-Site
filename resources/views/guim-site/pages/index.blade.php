@extends('guim-site.app', ['title' => 'Accueil'])
@section('content')
     <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="preloader" id="preloader">
          <div class="loader">
            <div class="line-scale">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
        <!-- <section> begin ============================-->

                    <!-- <section> begin ============================-->
      <section class="py-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="bg-holder" style="background-image:url({{ asset('guim-site/assets/img/header-5.jpg') }});"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row py-8 align-items-center" data-inertia='{"weight":1.5}'>
            <div class="col-sm-10 col-lg-8">
              <div class="overflow-hidden">
                <h1 class="fs-4 fs-md-5" data-zanim-xs='{"delay":0.5}' style="color:white">Expert Consultants</h1>
              </div>
              <div class="overflow-hidden" >
                <h4 class=" mt-4 mb-5 fs-1 fs-md-2 lh-xs" style="color:white">Over 10 years of experience in helping clients finding comprehensive solutions.</h4>
              </div>
              <div class="overflow-hidden">
                <div data-zanim-xs='{"delay":0.7}'><a class="btn btn-primary me-3 mt-3" href="#!">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="../contact.html">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
{{--
            <section class="bg-white" style="margin-bottom: -100px">
                <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-10 col-md-6">
                    <h3 class="fs-2 fs-lg-3">La mission de la GuiM est de :</h3>
                    <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                    </div>
                </div>
                <div class="row mt-4 mt-md-5">
                    <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-chart-bar"></span></div>
                    <h3 class="mt-4 text-center" data-zanim-xs='{"delay":0.1}'>1</h3>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Développer un écosystème monétique national performant et interopérable.</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-bell"></span></div>
                    <h3 class="mt-4 text-center" data-zanim-xs='{"delay":0.1}'>2</h3>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Promouvoir l'inclusion financière en démocratisant l'accès aux services financières numérique.</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-lightbulb"></span></div>
                    <h3 class="mt-4 text-center" data-zanim-xs='{"delay":0.1}'>3</h3>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Offrir des solutions de paiment modernes, sécurisées et adaptées aus besoins de tous les acteurs économiques.</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-headset"></span></div>
                    <h3 class="mt-4 text-center" data-zanim-xs='{"delay":0.1}'>4</h3>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Garantir un environnement de confiance pour des transactions rapides, fiables et transparantes.</p>
                    </div>
                </div>
                </div><!-- end of .container-->
            </section> --}}

            <!-- <section> begin ============================-->
            <section class="bg-white" style="margin-bottom:-200px">
            <div class="container">
                <div class="row justify-content-center text-center">
                <div class="col-10 col-md-8">
                    <h3 class="fs-2 fs-lg-3">Lancement officiel du Switch GuiM</h3>
                    <p class="px-lg-4 mt-3">La Banque Centrale de la République de Guinée (BCRG) officialise le lancement du Switch National Monétique et Digital le mercredi 15 janvier 2025.</p>
                    <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                </div>
                </div>
                <div class="container">
                    <div class="row flex-center pb-6">
                        <video width="640" height="480" controls>
                            <source src="{{ asset('guim-site/assets/img/videos/videos23012025.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div><!-- end of .container-->
            </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================-->

            <section>
                <div class="container">
                <div class="text-center mb-5">
                    <h3 class="fs-2 fs-md-3">Principaux objectifs de GuiM</h3>
                    <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4    ">
                    <div class="card h-100"><img class="card-img-top" src="{{ ('guim-site/assets/img/portrait-3.jpg') }}" alt="Reenal Scott" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <h5 data-zanim-xs='{"delay":0}'>Faciliter l'interopérabilité nationale et régionale</h5>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>GuiM Switch</h6>
                        </div>
                        <div class="overflow-hidden">
                            <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Connecter les institutions financière guinéennes entre elle, ainsi qu'aux réseaux régionaux et internationaux.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
                    <div class="card h-100"><img class="card-img-top" src="{{ asset ('guim-site/assets/img/portrait-4.jpg') }}" alt="Lily Anderson" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <h5 data-zanim-xs='{"delay":0}'>Renforcer la sécurité des transactions</h5>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>GuiM Switch</h6>
                        </div>
                        <div class="overflow-hidden">
                            <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Mettre en place des systèmes avancés de détection de fraude, de monitoring, et de protection des données.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
                    <div class="card h-100"><img class="card-img-top" src="{{ ('guim-site/assets/img/portrait-3.jpg') }}" alt="Thomas Anderson" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <h5 data-zanim-xs='{"delay":0}'>Accompagner les partenaires</h5>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>GuiM Switch</h6>
                        </div>
                        <div class="overflow-hidden">
                            <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Fournir des outils, des formations et support technique adaptés pour permettre une transition digitale réussie.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4   ">
                    <div class="card h-100"><img class="card-img-top" src="{{ ('guim-site/assets/img/portrait-3.jpg') }}" alt="Legartha Mantana" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <h5 data-zanim-xs='{"delay":0}'>Promouvoir l'innovation des paiements</h5>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Brand Management Consultant</h6>
                        </div>
                        <div class="overflow-hidden">
                            <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Intégrer des solutions technologiques modernes comme les paiements sans contact, les portefeuilles électroniques, et les passerelles de paiement e-commerce.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4   ">
                    <div class="card h-100"><img class="card-img-top" src="{{ ('guim-site/assets/img/portrait-3.jpg') }}" alt="John Snow" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <h5 data-zanim-xs='{"delay":0}'>Développement de l'économie numérique</h5>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>GuiM Switch</h6>
                        </div>
                        <div class="overflow-hidden">
                            <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Favoriser le développement des paiements digitaux pour les commerçants et les utilisateurs, tout en réduisant la dépendance aux espèces.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->

            {{-- <!-- <section> begin ============================-->
            <section>
            <div class="container">
                <div class="text-center mb-7">
                <h3 class="fs-2 fs-md-3">Pourquoi nous choisir ? (GuiM)</h3>
                <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                </div>
                <div class="row">
                <div class="col-lg-6 pe-lg-3"><img class="rounded-3 img-fluid" src="{{ asset ('guim-site/assets/img/why-choose-us.jpg') }}" alt="about" /></div>
                <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                    <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                        <h5 class="fs-0 fs-lg-1"><span class="fas fa-comment-dots fs-1 me-2" data-fa-transform="flip-h"></span>Une équipe de professionelle</h5>
                        <p class="mt-3">Nous fournissons des ressources, formons, parlons, conseillons et encourageons les leaders du marché, les propriétaires d'entreprises et les professionnels à être efficaces sur le lieu de travail.</p>
                    </div>
                    </div>
                    <div class="overflow-hidden">
                    <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                        <h5 class="fs-0 fs-lg-1"><span class="fas fa-palette fs-1 me-2" data-fa-transform="shrink-1"></span>Une équipe créatif</h5>
                        <p class="mt-3">Compte tenu du grand nombre de facteurs à prendre en considération pour déterminer comment caractériser votre entreprise, ne serait-il pas formidable d'avoir à bord un groupe de personnes bien informées et tournées vers l'avenir, qui savent ce qu'elles font ?</p>
                    </div>
                    </div>
                    <div class="overflow-hidden">
                    <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                        <h5 class="fs-0 fs-lg-1"><span class="fas fa-stopwatch fs-1 me-2" data-fa-transform="grow-1"></span>Assistance de qualité 24h/7</h5>
                        <p class="mt-3">Concevoir des stratégies marketing intelligentes et convaincantes, améliorer le positionnement des produits et augmenter les taux de conversion, Elixir est toujours disponible pour vous guider.</p>
                    </div>
                    </div>
                </div>
                </div>
            </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================--> --}}

            <!-- <section> begin ============================-->
            <section>
                <div class="bg-holder overlay overlay-elixir" style="background-image:url({{ asset ('guim-site/assets/img/background-15.jpg') }});"></div>
                <!--/.bg-holder-->
                <div class="container">
                    <div class="d-flex"><span class="me-3"> <img src="{{ asset ('guim-site/assets/img/checkmark.png') }}" alt="checkmark" style="width: 55px"/></span>
                    <div class="flex-1">
                        <h2 class="text-warning fs-3 fs-lg-4">Nos chiffres en 2025</h2>
                        <div class="row mt-4 pe-lg-10">
                        <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":52}'>52</div>
                            <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Banques</h6>
                        </div>
                        <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":164}'>164</div>
                            <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Microfinances</h6>
                        </div>
                        <div class="w-100 d-flex d-lg-none"></div>
                        <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":38}'>38</div>
                            <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>EME</h6>
                        </div>
                        <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":100}'>100</div>
                            <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Fintech </h6>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================-->

            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="bg-100">
            <div class="container">
                <div class="text-center mb-6">
                <h3 class="fs-2 fs-md-3">Dernières nouvelles</h3>
                <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                </div>
                <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="../news/news.html"><img class="card-img-top" src="{{ asset('guim-site/assets/img/9.jpg') }}" alt="Featured Image" /></a>
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden"><a href="../news/news.html">
                            <h5 data-zanim-xs='{"delay":0}'>Lancement du Switch national monétique et digital : une réforme salutaire mais qui nécessite d’énormes prérequis</h5>
                        </a></div>
                        <div class="overflow-hidden">
                        <p class="text-500" data-zanim-xs='{"delay":0.1}'>15/01/2025 | By admin GuiM</p>
                        </div>
                        <div class="overflow-hidden">
                        <p class="mt-3" data-zanim-xs='{"delay":0.2}'>La Banque Centrale de la République de Guinée (BCRG) vient d’officialiser le lancement du Switch National Monétique et Digital ce mercredi 15 janvier 2025. Ce projet vieux de plusieurs années avait été annoncé par l’ancien Gouverneur Dr Louceny Nabé lors d’une émission télévisée en 2021...</p>
                        </div>
                        <div class="overflow-hidden">
                        <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="../news/news.html">Lire plus<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="../news/news.html"><img class="card-img-top" src="{{ asset('guim-site/assets/img/10.jpg') }}" alt="Featured Image" /></a>
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden"><a href="../news/news.html">
                            <h5 data-zanim-xs='{"delay":0}'>Lancement du Switch national monétique et digital : une réforme salutaire mais qui nécessite d’énormes prérequis</h5>
                        </a></div>
                        <div class="overflow-hidden">
                        <p class="text-500" data-zanim-xs='{"delay":0.1}'>15/01/2025 | By admin GuiM</p>
                        </div>
                        <div class="overflow-hidden">
                        <p class="mt-3" data-zanim-xs='{"delay":0.2}'>La Banque Centrale de la République de Guinée (BCRG) vient d’officialiser le lancement du Switch National Monétique et Digital ce mercredi 15 janvier 2025. Ce projet vieux de plusieurs années avait été annoncé par l’ancien Gouverneur Dr Louceny Nabé lors d’une émission télévisée en 2021...</p>
                        </div>
                        <div class="overflow-hidden">
                        <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="../news/news.html">Lire plus<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="../news/news.html"><img class="card-img-top" src="{{ asset('guim-site/assets/img/11.jpg') }}" alt="Featured Image" /></a>
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden"><a href="../news/news.html">
                            <h5 data-zanim-xs='{"delay":0}'>Lancement du Switch national monétique et digital : une réforme salutaire mais qui nécessite d’énormes prérequis</h5>
                        </a></div>
                        <div class="overflow-hidden">
                        <p class="text-500" data-zanim-xs='{"delay":0.1}'>15/01/2025 | By admin GuiM</p>
                        </div>
                        <div class="overflow-hidden">
                        <p class="mt-3" data-zanim-xs='{"delay":0.2}'>La Banque Centrale de la République de Guinée (BCRG) vient d’officialiser le lancement du Switch National Monétique et Digital ce mercredi 15 janvier 2025. Ce projet vieux de plusieurs années avait été annoncé par l’ancien Gouverneur Dr Louceny Nabé lors d’une émission télévisée en 2021...</p>
                        </div>
                        <div class="overflow-hidden">
                        <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="../news/news.html">Lire plus<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- <section> begin ============================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
@endsection
