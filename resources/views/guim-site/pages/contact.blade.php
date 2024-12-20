@extends('guim-site.app')
@section('content')
    <div class="container">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-8">
                    <div class="page-caption">
                        <h2 class="page-title">Contactez-nous</h2>
                        <p class="page-description">Cardiology heart care clinic is represents the largest and most experienced team of board-certified cardiologists.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Accueil</a></li>
                        <li class="active">Contactez-nous</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb30">
                    <p class="lead">Si vous avez des inquiétudes concernant vos transactions bancaire, veuillez contacter le service de référence et du support de la Guinéenne de Monétique.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <h2 class="mb40">Coordonnées</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-block">
                                <div class="contact-head">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker fa-1x"></i>
                                    </div>
                                    <h3>Addresse</h3></div>
                                <p>Kaloum Almamya, Immeuble Air France</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-block">
                                <div class="contact-head">
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope-open-o fa-1x"></i>
                                    </div>
                                    <h3>Envoyez-nous un mail</h3></div>
                                <p class="mb0">support@guim-gn.com</p>
                                <p>contact@guim-gn.com</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-block">
                                <div class="contact-head">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone fa-1x"></i>
                                    </div>
                                    <h3>Téléphone</h3></div>
                                <p>+(224) 620 00 00 00</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-block">
                                <div class="contact-head">
                                    <div class="contact-icon">
                                        <i class="fa fa-clock-o fa-1x"></i>
                                    </div>
                                    <h3>Horaires d'ouverture</h3></div>
                                <p>Lundi - Samedi
                                    <br> 08:00 am - 17:00 pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget-appointment widget">
                        <h3 class="widget-title">Entrer en contact avec nous</h3>
                        <form>
                            <div class="row">
                                <!-- Text input-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="Name">Nom et prénoms *</label>
                                        <input id="Name" name="Name" type="text" placeholder="Nom et prénoms" class="form-control">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="EmailUs">Email *</label>
                                        <input id="EmailUs *" name="EmailUs" type="email" placeholder="Votre addresse mail" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="Phone">Téléphone</label>
                                        <input id="Phone" name="Phone" type="text" placeholder="Téléphone" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="message">Message</label>
                                        <textarea class="form-control" id="message" placeholder="message" rows="6"></textarea>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
