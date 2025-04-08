@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top: -25px;background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                {{$product->name}}
                </h1>
                <p class="lead">
                    در زمان صرفه جویی کنید و مواد غذایی را به ما بسپارید.
                </p>
            </div>
        </div>
    </div>

        <div class="container">
    @if (\Session::has('success'))
        <div class="alert alert-success">
                <p>{!! \Session::get('success') !!}</p>
        </div>
    @endif
        </div>
    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="slider-zoom">
                        <a href="{{asset('assets/img/'.$product->image.'')}}" class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                            <img alt="Detail Zoom thumbs image" src="{{asset('assets/img/'.$product->image.'')}}" style="width: 100%;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p>
                        <strong>بررسی اجمالی</strong><br>
                        {{$product->description}}
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                <strong>قیمت</strong><br>
                                <span class="price">IRR {{$product->price}}</span>
{{--                                <span class="old-price">Rp 150.000</span>--}}
                            </p>
                        </div>

                    </div>
                    <p class="mb-1">
                        <strong>تعداد</strong>
                    </p>
                    <form method="POST" action="{{route('products.add.cart')}}">
                        @csrf
                    <div class="row">
                        <div class="col-sm-5">
                            <input name="qty" class="form-control" type="number" min="1" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="1" name="vertical-spin">
                        </div>
                        <div class="col-sm-6"><span class="pt-1 d-inline-block">بسته بندی (1000 گرم)</span></div>
                    </div>
                        <input name="name" value="{{$product->name}}" type="hidden">
                        <input name="price" value="{{$product->price}}" type="hidden">
                        <input name="pro_id" value="{{$product->id}}" type="hidden">
                        <input name="image" value="{{$product->image}}" type="hidden">
                        @if(isset(Auth::user()->id))
                        @if($checkInCart > 0)
                            <button disabled class="mt-3 btn btn-primary btn-lg">
                                <i class="fa fa-shopping-basket"></i> به سبد خرید اضافه شد
                            </button>
                        @else
                            <button type="submit" name="submit" class="mt-3 btn btn-primary btn-lg">
                                <i class="fa fa-shopping-basket"></i> افزودن به سبد خرید
                            </button>
                        @endif
                        @else
                        <p class="alert alert-success mt-5">برای افزودن محصول به سبد خرید وارد شوید</p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section id="related-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">محصولات مرتبط</h2>
                    @if($relatedProduct->count() > 0)
                    <div class="product-carousel owl-carousel">
                        @foreach($relatedProduct as $relatedproduct)
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
                                                Until {{$relatedproduct->exp_date}}
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{asset('assets/img/'.$relatedproduct->image.'')}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('single.product',$relatedproduct->id)}}"> {{$relatedproduct->name}} </a>
                                        </h4>
                                        <div class="card-price">
{{--                                            <span class="discount">Rp. 300.000</span>--}}
                                            <span class="reguler">IRR. {{$relatedproduct->price}}</span>
                                        </div>
                                        <a href="{{route('single.product',$relatedproduct->id)}}" class="btn btn-block btn-primary">
                                            جزئیات محصول
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @else
                        <center><a class="alert alert-success">در حال حاضر هیچ محصول مرتبطی برای این دسته وجود ندارد</a></center>
                    @endif

                </div>
            </div>
        </div>
    </section>
</div>

@endsection
