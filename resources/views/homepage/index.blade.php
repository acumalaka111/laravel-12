@extends('layouts.template')
@section('content')
    <div class="container">
        <!-- carousel -->
        <div class="row">
            <div class="col">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/rhea1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/rhea2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/rhea3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" dataslide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" dataslide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end carousel -->
        <!-- kategori produk -->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center">Kategori Produk</h2>
            </div>
            <!-- kategori pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('priceml') }}">
                        <img src="{{ asset('images/btrx.jpg') }}" alt="foto kategori" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('priceml') }}" class="text-decorationnone">
                            <p class="card-text">Mobile Legends</p>
                        </a>

                    </div>
                </div>
            </div>
            <!-- kategori kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('pricepubg') }}">
                        <img src="{{ asset('images/pubg.jpg') }}" alt="foto kategori" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('pricepubg') }}" class="text-decoration-none">
                            <p class="card-text">PUBG Mobile</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- kategori ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('priceepep') }}">
                        <img src="{{ asset('images/epep.jpg') }}" alt="foto kategori" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('priceepep') }}" class="text-decoration-none">
                            <p class="card-text">Free Fire</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end kategori produk -->
        <!-- produk Promo-->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">

                <h2 class="text-center"></h2>
            </div>
            <!-- H Domino -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('pricedomino') }}">
                        <img src="{{ asset('images/hdomino.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('pricedomino') }}" class="text-decoration-none">
                            <p class="card-text">
                                Higgs Domino

                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-light">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Genshin Impact -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('pricegenshin') }}">
                        <img src="{{ asset('images/gensin impek.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('pricegenshin') }}" class="text-decoration-none">
                            <p class="card-text">
                                Genshin Impact

                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-light">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Arena Of Valor -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('priceaov') }}">
                        <img src="{{ asset('images/aop.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('priceaov') }}" class="text-decoration-none">
                            <p class="card-text">
                                Arena Of Valor
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-light">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end produk promo -->

        <p>
            Surostore.com adalah tempat top up game aman, terpercaya, dan juga murah daritoko online lainnya.
        </p>
        <p>

        </p>
        <p class="text-center">
            <a href="" class="btn btn-outline-secondary">
                Baca Selengkapnya
            </a>
        </p>
    </div>
    </div>
    <!-- end tentang toko -->

    </div>
@endsection
