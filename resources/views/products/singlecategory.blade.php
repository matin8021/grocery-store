@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top: -25px;background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    صفحه ی خرید
                </h1>
                <p class="lead">
                    در زمان صرفه جویی کنید و مواد غذایی را به ما بسپارید.
                </p>
            </div>
        </div>
    </div>

    <section id="most-wanted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">محصولات این دسته</h2>
                    @if($products->count() > 0)
                    <div class="product-carousel owl-carousel">
                        @foreach($products as $product)
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
                                            <span class="reguler">{{$product->price}} IRR.</span>
                                        </div>
                                        <a href="{{route('single.product',$product->id)}}" class="btn btn-block btn-primary">
                                            نمایش جزئیات
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    @else
                        <center><a class="alert alert-success">در حال حاضر هیچ محصولی برای این دسته وجود ندارد</a></center>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
