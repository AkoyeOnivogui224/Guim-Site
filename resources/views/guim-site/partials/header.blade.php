<div class="header-wrapper">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="index.html"><img src="{{ asset ('guim-site/assets/images/logo.png') }}" alt="" class="img-responsive"></a>
                </div>
                <div class="col-md-offset-1 col-md-7 col-sm-8 col-lg-offset-1 col-lg-7 hidden-xs">
                    <div class="row">
                        <div class="col-md-6 hidden-xs hidden-sm hidden-md col-lg-4"><span class="header-text"><i class="fa fa-map-marker"></i> <a href="#">Kaloum Almamya</a></span></div>
                        <div class="col-md-6 hidden-xs col-sm-6 col-lg-4"><span class="header-text call-text"><i class="fa fa-phone"></i> +(224) 620624084</span></div>
                        <div class="col-md-4 col-sm-6 col-lg-4 hidden-xs"><a href="{{ route('contact') }}" class="btn btn-default">Contactez-nous</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation-wrapper">
        <div class="container">
            <div id="navigation">
                <ul>
                    <li class="active"><a href="{{ route('home') }}" title="Home">Accueil</a></li>
                    <li><a href="{{ route('about') }}" title="About Us">Qui sommes nous ?</a></li>
                    <li><a href="{{ route('service') }}" title="About Us">Services</a></li>
                    <li><a href="{{ route('ressource') }}" title="About Us">Ressources</a></li>
                    <li><a href="{{ route('contact') }}" title="About Us">Contact</a></li>

                </ul>
            </div>
        </div>
    </div>

</div>
