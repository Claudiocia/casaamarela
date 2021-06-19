@extends('layouts.casaamarela')

@section('conteudo')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Um espaço aberto ao debate plural sobre a universidade pública</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Existem várias maneiras de participar!</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{route('contribuis.create')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Participe</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('site/img/hero-img.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

    </main><!-- End #main -->

@endsection
