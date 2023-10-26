@extends('layouts.app')

@section('content')
<main id="app_main">
    <section id="app_hero">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}">
    </section>

    <section id="product_list" class="container">

        <div class="container">
            <div class="title">current series</div>
        </div>

        <div class="row px-3">

            @forelse($products as $product)
            <div class="col-2 g-4">
                <div id="product" class="h-100">
                    <img class="img-fluid" src="{{ $product['thumb']}}" alt="">
                    <h6>{{ $product['title'] }}</h6>
                </div>
            </div>
            @empty

            @endforelse

        </div>

        <div class="more d-flex justify-content-center align-items-center pt-3">
            <a class="btn btn-primary rounded-0 text-light text-uppercase">load more</a>
        </div>

    </section>
    <!-- /#product_list -->

    <section id="main_menu">
        <div class="container">
            <ul class="list-unstyled d-flex justify-content-around align-items-center py-5 m-0">

                <li class="d-flex align-items-center p-3">
                    <a href="#" class="d-flex align-items-center">
                        <div class="item_img">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                        </div>
                        <span>digital comics</span>
                    </a>
                </li>

                <li class="d-flex align-items-center p-3">
                    <a href="#" class="d-flex align-items-center">
                        <div class="item_img">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                        </div>
                        <span>Dc Merchandise</span>
                    </a>
                </li>

                <li class="d-flex align-items-center p-3">
                    <a href="#" class="d-flex align-items-center">
                        <div class="item_img">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                        </div>
                        <span>Subscription</span>
                    </a>
                </li>

                <li class="d-flex align-items-center p-3">
                    <a href="#" class="d-flex align-items-center">
                        <div class="item_img">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                        </div>
                        <span>Comic Shop Locator</span>
                    </a>
                </li>

                <li class="d-flex align-items-center p-3">
                    <a href="#" class="d-flex align-items-center">
                        <div class="item_img">
                            <img class="img-fluid" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                        </div>
                        <span>Dc Power Visa</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- /.container -->
    </section>
    <!-- /#main_menu -->

</main>
<!-- /#app_main -->
@endsection