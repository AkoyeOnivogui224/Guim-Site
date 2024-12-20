@extends('guim-site.app')
@section('content')
    <div class="container">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-8">
                    <div class="page-caption">
                        <h2 class="page-title">Qui sommes nous ?</h2>
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
                        <li class="active">About us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Qui sommes nous ?</h1>
                    <p class="lead">The goal of the physicians and staff of cardiology heart care is to provide state-of-the cardio service care in a comfortable and caring environment with the special needs of our patients. </p>
                    <p>Heart Care is the past, present, and future of cardiology in India. Founded 5 years ago, Heart Care is the largest cardiovascular group in India. </p>
                </div>
                <div class="col-lg-5">
                    <a href="#" class="imghover"><img src="{{ asset('guim-site/assets/images/about-img.jpg') }}" alt="" class="img-responsive"></a>
                </div>
            </div>
            <hr>
        </div>
        <div class="space-medium">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Notre mission</h2>
                        <p>“Our mission is to provide our patients the highest quality cardiovascular care available lorem ipsum dolor sit amet conecteture”</p>
                    </div>
                    <div class="col-md-4">
                        <h2>Notre vision</h2>
                        <p>“We look not only at the present, but also to the future for each patient and to the future for the field of cardiology as a whole”</p>
                    </div>
                    <div class="col-md-4">
                        <h2>Nos valeurs</h2>
                        <p>As we provide our patients with exceptional clinical results, we are also concerned with the overall health of each individual we serve. </p>
                    </div>
                </div>
            </div>
        </div>

        @include('guim-site.pages.contact-small')
@endsection
