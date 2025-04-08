@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top: -25px;background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    صفحه خرید
                </h1>
                <p class="lead">
                    در زمان صرفه جویی کنید و مواد غذایی را به ما بسپارید.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop-categories owl-carousel mt-5">
                    @foreach($categories as $category)
                        <div class="item">
                            <a href="{{route('single.category',$category->id)}}">
                                <div class="media d-flex align-items-center justify-content-center">
                                    <span class="d-flex mr-2"><i class="sb-bistro-{{$category->icon}}"></i></span>
                                    <div class="media-body">
                                        <h5>{{$category->name}}</h5>
                                        <p>سبزیجات تازه برداشت شده از پرورش دهندگان محلی</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <section id="most-wanted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">پرطرفدار</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach($mostwanted as $most)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">ویژه</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-primary">
                                                Until {{$most->exp_date}}
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{asset('assets/img/'.$most->image.'')}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('single.product',$most->id)}}">{{$most->name}}</a>
                                        </h4>
                                        <div class="card-price">
{{--                                            <span class="discount">Rp. 300.000</span>--}}
                                            <span class="reguler">IRR. {{$most->price}}</span>
                                        </div>
                                        <a href="{{route('single.product',$most->id)}}" class="btn btn-block btn-primary">
                                            نمایش جزئیات
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vegetables" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">سبزیجات</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach($vegetables as $product)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">ویژه</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-primary">
                                                Until {{$product->exp_date}}
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{asset('assets/img/'.$product->image.'')}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('single.product',$product->id)}}">{{$product->name}}</a>
                                        </h4>
                                        <div class="card-price">
{{--                                            <span class="discount">Rp. 300.000</span>--}}
                                            <span class="reguler">IRR. {{$product->price}}</span>
                                        </div>
                                        <a href="{{route('single.product',$product->id)}}" class="btn btn-block btn-primary">
                                            نمایش جزئیات
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="meats">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">گوشت ها</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach($meats as $product)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">ویژه</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-primary">
                                                Until {{$product->exp_date}}
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{asset('assets/img/'.$product->image.'')}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('single.product',$product->id)}}">{{$product->name}}</a>
                                        </h4>
                                        <div class="card-price">
{{--                                            <span class="discount">Rp. 300.000</span>--}}
                                            <span class="reguler">IRR. {{$product->price}}</span>
                                        </div>
                                        <a href="{{route('single.product',$product->id)}}" class="btn btn-block btn-primary">
                                            نمایش جزئیات
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fishes" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">ماهی ها</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach($fishes as $product)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">ویژه</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-primary">
                                                Until {{$product->exp_date}}
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{asset('assets/img/'.$product->image.'')}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('single.product',$product->id)}}">{{$product->name}}</a>
                                        </h4>
                                        <div class="card-price">
{{--                                            <span class="discount">Rp. 300.000</span>--}}
                                            <span class="reguler">IRR. {{$product->price}}</span>
                                        </div>
                                        <a href="{{route('single.product',$product->id)}}" class="btn btn-block btn-primary">
                                            نمایش جزئیات
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fruits">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">میوه ها</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach($fruits as $product)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">ویژه</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-primary">
                                                Until {{$product->exp_date}}
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{asset('assets/img/'.$product->image.'')}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('single.product',$product->id)}}">{{$product->name}}</a>
                                        </h4>
                                        <div class="card-price">
{{--                                            <span class="discount">Rp. 300.000</span>--}}
                                            <span class="reguler">IRR. {{$product->price}}</span>
                                        </div>
                                        <a href="{{route('single.product',$product->id)}}" class="btn btn-block btn-primary">
                                            نمایش جزئیات
                                        </a>

                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
