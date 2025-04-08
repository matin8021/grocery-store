@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top: -25px; background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    سبد شما
                </h1>
                <p class="lead">
                    در زمان صرفه جویی کنید و مواد غذایی را به ما بسپارید.
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        @if (\Session::has('delete'))
            <div class="alert alert-success">
                <p>{!! \Session::get('delete') !!}</p>
            </div>
        @endif
    </div>
    <section id="cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="10%"></th>
                                <th>محصولات</th>
                                <th>قیمت</th>
                                <th width="15%">تعداد</th>
                                <th>جمع</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cartProducts as $product)
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/img/'.$product->image.'')}}" width="60">
                                    </td>
                                    <td>
                                        {{$product->name}}<br>
                                        <small>1000g</small>
                                    </td>
                                    <td>
                                        IRR {{$product->price}}
                                    </td>
                                    <td>
                                        {{$product->qty}}
                                    </td>
                                    <td>
                                        IRR {{$product->price * $product->qty}}
                                    </td>
                                    <td>
                                        <a href="{{route('products.cart.delete',$product->id)}}" class="text-danger"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <a href="shop.html" class="btn btn-default">ادامه ی فرآیند خرید</a>
                </div>
                <div class="col text-right">

                    <div class="clearfix"></div>
                    <h6 class="mt-3"> مجموع : IRR.{{$subtotal}}</h6>
                    @if($subtotal > 0)
                    <form action="{{route('products.prepare.checkout')}}" method="POST">
                        @csrf
                        <input name="price" value="{{$subtotal}}" type="hidden">
                    <button type="submit" class="btn btn-lg btn-primary">بررسی <i class="fa fa-long-arrow-right"></i></button>
                    </form>
                    @else
                        <center><p class="alert alert-success">شما هیچ محصولی در سبد خرید ندارید و هنوز نمی توانید پرداخت کنید</p></center>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
