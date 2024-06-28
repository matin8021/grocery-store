@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content" style="margin-top: -25px">
    <div class="banner">
        <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
            <video width="100%" preload="auto" loop autoplay muted>
                <source src='assets/media/explore.mp4' type='video/mp4' />
                <source src='assets/media/explore.webm' type='video/webm' />
            </video>
            <div class="container">
                <h1 class="pt-5">
                    در زمان صرفه جویی کنید<br>
                    و مواد غذایی خود را به ما بسپارید
                </h1>
                <p class="lead">
                    همیشه به روز
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-shopping-basket"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Buy
                                </h4>
                                <p class="card-text">
                                    به سادگی روی محصول مورد نظر خود برای خرید کلیک کنید و پس از اتمام سفارش خود را ارسال کنید.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fas fa-leaf"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Harvest
                                </h4>
                                <p class="card-text">
                                    تیم ما تضمین می کند که کیفیت محصول مطابق با استاندارد ما است و ظرف 24 ساعت پس از روز برداشت محصول را درب منزل تحویل می دهد.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-truck"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    تحویل
                                </h4>
                                <p class="card-text">
                                    کشاورزان سفارشات شما را دو روز قبل دریافت می کنند تا بتوانند دقیقاً مطابق سفارش شما برای برداشت آماده شوند - بدون هدر رفتن محصول.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="why">
        <h2 class="title">چرا فروشگاه ما</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 text-center gray-bg">
                        <div class="card-icon">
                            <div class="card-icon-i text-success">
                                <i class="fas fa-leaf"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                مستقیم از مزرعه
                            </h4>
                            <p class="card-text">
                                مفهوم مزرعه به میز ما بر رساندن محصولات تازه مستقیماً از مزارع محلی به میزهای خود در یک روز تأکید دارد، از این رو می دانید تازه ترین محصول را مستقیماً از برداشت دریافت می کنید.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center gray-bg">
                        <div class="card-icon">
                            <div class="card-icon-i text-success">
                                <i class="fa fa-question"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                Know Your Farmers
                            </h4>
                            <p class="card-text">
                                می‌خواهیم با داشتن نمایه کشاورزان در هر مورد و صفحه کشاورز، دقیقاً بدانید چه کسی غذای شما را پرورش می‌دهد. می‌توانید از مزارع دیدن کنید و عشقی را که در پرورش غذای شما انجام می‌دهند، ببینید.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center gray-bg">
                        <div class="card-icon">
                            <div class="card-icon-i text-success">
                                <i class="fas fa-smile"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                بهبود معیشت کشاورزان
                            </h4>
                            <p class="card-text">
                                به آرامی اما مطمئناً، با قطع زنجیره تامین و سیستم غذایی پیچیده، امیدواریم با دادن بازدهی که شایسته تلاش سخت کشاورزان هستند، رفاه کشاورزان را بهبود بخشیم.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-5 text-center">
                    <a href="{{route('products.shop')}}" class="btn btn-primary btn-lg">خرید کنید</a>
                </div>
            </div>
        </div>
    </section>

    <section id="categories" class="pb-0 gray-bg">
        <h2 class="title">دسته بندی ها</h2>
        <div class="landing-categories owl-carousel">
            @foreach($categories as $category)
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="{{asset('assets/img/'.$category->image.'')}}">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Vegetables</h4> -->
                            <a href="{{route('single.category',$category->id)}}" class="btn btn-primary btn-lg">{{$category->name}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
