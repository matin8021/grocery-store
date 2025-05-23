@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top: -25px;background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    معاملات شما
                </h1>
                <p class="lead">
                    در زمان صرفه جویی کنید و مواد غذایی را به ما بسپارید.
                </p>
            </div>
        </div>
    </div>

    <section id="cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="5%"></th>
                                <th>نام</th>
                                <th>نام خانوادگی</th>
                                <th>آدرس</th>
                                <th>شماره همراه</th>
                                <th>ایمیل</th>
                                <th>شهر</th>
                                <th>وضعیت</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($orders->count() > 0)
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>
                                        {{$order->name}}
                                    </td>
                                    <td>
                                        {{$order->last_name}}
                                    </td>
                                    <td>
                                        {{$order->address}}
                                    </td>
                                    <td>
                                        {{$order->phone_number}}
                                    </td>
                                    <td>
                                        {{$order->email}}
                                    </td>
                                    <td>
                                        {{$order->town}}
                                    </td>

                                    <td>
                                        {{$order->status}}
                                    </td>

                                </tr>

                            @endforeach

                            @else
                            <p class="alert alert-success">شما در حال حاضر هیچ سفارشی ندارید</p>
                            @endif
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </section>


</div>

@endsection
