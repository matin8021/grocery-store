@extends('layouts.app')

@section('content')
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top: -25px; background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
                <div class="container">
                    <h1 class="pt-5">
                        بررسی سبد خرید
                    </h1>
                    <p class="lead">
                        در زمان صرفه جویی کنید و مواد غذایی را به ما بسپارید.
                    </p>
                </div>
            </div>
        </div>

        <section id="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <h5 class="mb-3">جزئیات صورتحساب</h5>
                        <!-- Bill Detail of the Page -->
                        <form action="{{route('products.proccessCheckout')}}" method="POST" class="bill-detail">
                            <fieldset>
                                @csrf
                                <div class="form-group row">
                                    <div class="col">
                                        <input class="form-control" name="name" placeholder="نام" type="text">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" name="last_name" placeholder="نام خانوادگی" type="text">
                                    </div>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <input class="form-control" placeholder="Company Name" type="text">--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <textarea class="form-control" name="address" placeholder="آدرس"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="town" placeholder="شهر / استان" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="state" placeholder="کشور / منطقه" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="zip_code" placeholder="کد پستی" type="text">
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <input class="form-control" name="email" placeholder="ایمیل" type="email">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" name="phone_number" placeholder="شماره همراه" type="tel">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col">
                                        <input class="form-control" name="user_id" value="{{Auth::user()->id}}" type="hidden" placeholder="user_id" type="text">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" name="price" value="{{$checkoutSubtotal + 20}}" type="hidden">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="order_notes" placeholder="یادداشت های سفارش"></textarea>
                                </div>
                            </fieldset>

                            <div class="form-group">
                                <button class="btn btn-primary" style="width: 70px; height: 70px" name="submit" type="submit">ارسال</button>
                            </div>
                        </form>
                        <!-- Bill Detail of the Page end -->
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="holder">
                            <h5 class="mb-3">سفارش شما</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>محصولات</th>
                                        <th class="text-right">جمع</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cartItems as $product)
                                    <tr>
                                        <td>
                                            {{$product->name}} x{{$product->qty}}
                                        </td>
                                        <td class="text-right">
                                            IRR {{$product->subtotal}}
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfooter>
                                        <tr>
                                            <td>
                                                <strong>جمع سبد خرید</strong>
                                            </td>
                                            <td class="text-right">
                                                IRR {{$checkoutSubtotal}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>هزینه ی حمل</strong>
                                            </td>
                                            <td class="text-right">
                                                IRR 20
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>سفارش کل</strong>
                                            </td>
                                            <td class="text-right">
                                                <strong>IRR {{$checkoutSubtotal + 20}}</strong>
                                            </td>
                                        </tr>
                                    </tfooter>
                                </table>
                            </div>


                        </div>
{{--                        <p class="text-right mt-3">--}}
{{--                            <input checked="" type="checkbox"> I’ve read &amp; accept the <a href="#">terms &amp; conditions</a>--}}
{{--                        </p>--}}
{{--                        <a href="#" class="btn btn-primary float-right">PROCEED TO CHECKOUT <i class="fa fa-check"></i></a>--}}
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
        </section>
    </div>

@endsection
