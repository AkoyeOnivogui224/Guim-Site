@extends('guim-site.app')
@section('content')
    <div class="slider">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="slider-img"><img src="{{ asset ('guim-site/assets/images/guim-slider-1.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="slider-captions">
                                <h2 class="slider-title"><strong>INFRASTRUCTURES PARTAGEE</strong> Pour tous les prestataires</h2>
                                <a href="#" class="btn btn-default hidden-xs">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{ asset ('guim-site/assets/images/guim-slider-2.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="slider-captions">
                                <h2 class="slider-title"><strong>INFRASTRUCTURES PARTAGEE</strong> Pour tous les prestataires</h2>
                                <a href="#" class="btn btn-default hidden-xs">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <a href="#"><img src="{{ asset('guim-site/assets/images/guim-img-about-1.jpg') }}" alt="" class="img-responsive img-circle"></a>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                    <h1> <br>
                <strong>Qui sommes nous ?</strong></h1>
                    <div class="team-meta"><span>(Guinéenne de Monétique)</span></div>
                    <p class="lead">“Dr. Thomas davis was born and raised in India.he is a proud first generation Indian. He was awarded the Young Investigators award”</p>
                    <a href="#" class="btn btn-default">Lire plus</a>
                </div>
            </div>
        </div>
    </div>

    <div class="space-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2>Nos services</h2>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-block feature-bg">
                        {{-- <div class="feature-icon"> <i class="icon-list-appointment icon-4x"></i></div> --}}
                        <div class="feature-content">
                            <h3 class="feature-title">Paiement Mobile Instantané</h3>
                            <p>For your convenience, we have placed patient form below, in the form of PDF files, that you may download at your respite..</p>
                            <a href="#" class="btn btn-default">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-block feature-bg">
                        {{-- <div class="feature-icon"><i class="icon-list icon-4x"></i></div> --}}
                        <div class="feature-content">
                            <h3 class="feature-title">Transaction Switching d'Acquisition</h3>
                            <p>Your time is valuable and we make every effort to run on time. so book your appointment online, its fast n quickble to response.</p>
                            <a href="#" class="btn btn-default">Lire plus</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="feature-block feature-bg">
                        {{-- <div class="feature-icon"> <i class="icon-play-button icon-4x"></i></div> --}}
                        <div class="feature-content">
                            <h3 class="feature-title">Personalisation des cartes bancaires</h3>
                            <p>Click on the desired Below button for patient education videos to know more on various conditions and procedures.</p>
                            <a href="#" class="btn btn-default">Lire plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2>Service que nous offrons</h2>
                        <p>Our cardiologists offer a comprehensive and progressive cardiac care service. </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="st-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#tab-title-1" aria-controls="tab-title-1" role="tab" data-toggle="tab">Paiement Mobile Instantané</a></li>
                            <li role="presentation"><a href="#tab-title-2" aria-controls="tab-title-2" role="tab" data-toggle="tab">Transaction & Switching</a></li>
                            <li role="presentation"><a href="#tab-title-3" aria-controls="tab-title-3" role="tab" data-toggle="tab">Gestion des litiges</a></li>
                            <li role="presentation"><a href="#tab-title-4" aria-controls="tab-title-4" role="tab" data-toggle="tab">Personalisation des cartes</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab-title-1">
                                <div class="treatment-block">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="treatment-img">
                                                <a href="#" class="imghover"><img src="images/treatment-img-1.jpg" class="img-responsive" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="treatment-content">
                                                <h2><a href="#">Paiement Mobile Instantané</a></h2>
                                                <p>Sesto nisigravida vitae facilisis on infaus quis eliorbi sitamet in portain quis libero hasellus lorem pretiumis elitorbi.</p>
                                                <a href="#" class="btn-link">Voir plus de détail</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="treatment-list">
                                                <ul class="listnone heart-style">
                                                    <li><a href="#">Portefeuille à Banque</a></li>
                                                    <li><a href="#">Banque vers Portefeuille</a></li>
                                                    <li><a href="#">Portefeuille à Portefeuille</a></li>
                                                    <li><a href="#">Banque à Banque</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-title-2">
                                <div class="treatment-block">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="treatment-img">
                                                <a href="#" class="imghover"><img src="images/treatment-img-2.jpg" class="img-responsive" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="treatment-content">
                                                <h2><a href="#">Transaction Switching d'Acquisition</a></h2>
                                                <p>Sesto nisigravida vitae facilisis on infaus quis eliorbi sitamet in portain quis libero hasellus lorem pretiumis elitorbi.</p>
                                                <a href="#" class="btn-link">Voir plus de détail</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="treatment-list">
                                                <ul class="listnone heart-style">
                                                    <li><a href="#">GAB consultation de solde</a></li>
                                                    <li><a href="#">GAB retrait</a></li>
                                                    <li><a href="#">GAB/TPE revirement</a></li>
                                                    <li><a href="#">TPE Achat</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-title-3">
                                <div class="treatment-block">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="treatment-img">
                                                <a href="#" class="imghover"><img src="images/treatment-img-3.jpg" class="img-responsive" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="treatment-content">
                                                <h2><a href="#">Mobile Instant Payment</a></h2>
                                                <p>Sesto nisigravida vitae facilisis on infaus quis eliorbi sitamet in portain quis libero hasellus lorem pretiumis elitorbi.</p>
                                                <a href="#" class="btn-link">Voir plus de détail</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="treatment-list">
                                                <ul class="listnone heart-style">
                                                    <li><a href="#"></a></li>
                                                    <li><a href="#">Biventricular Pacemaker Implantation</a></li>
                                                    <li><a href="#">Standard Pacemaker Implantation</a></li>
                                                    <li><a href="#">Tilt Table Procedures</a></li>
                                                    <li><a href="#">Implantable Cardioverter Defibrillator</a></li>
                                                    <li><a href="#">Ventricular Tachycardia and Cryotherapy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-title-4">
                                <div class="treatment-block">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="treatment-img">
                                                <a href="#" class="imghover"><img src="images/treatment-img-4.jpg" class="img-responsive" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="treatment-content">
                                                <h2><a href="#">Personalisation des cartes bancaires</a></h2>
                                                <p>Sesto nisigravida vitae facilisis on infaus quis eliorbi sitamet in portain quis libero hasellus lorem pretiumis elitorbi.</p>
                                                <a href="#" class="btn-link">View More Details</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="treatment-list">
                                                <ul class="listnone heart-style">
                                                    <li><a href="#">Ablation Therapy for Atrial Fibrillation</a></li>
                                                    <li><a href="#">Biventricular Pacemaker Implantation</a></li>
                                                    <li><a href="#">Standard Pacemaker Implantation</a></li>
                                                    <li><a href="#">Tilt Table Procedures</a></li>
                                                    <li><a href="#">Implantable Cardioverter Defibrillator</a></li>
                                                    <li><a href="#">Ventricular Tachycardia and Cryotherapy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('guim-site.pages.contact-small')
@endsection
