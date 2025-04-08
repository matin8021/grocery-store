@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    @if (\Session::has('update'))
                        <div class="alert alert-success">
                            <p>{!! \Session::get('update') !!}</p>
                        </div>
                    @endif
                </div>
                <h5 class="card-title mb-4 d-inline">سفارش ها</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">نام</th>
                        <th scope="col">نام خانوادگی</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">کشور</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">قیمت</th>
                        <th scope="col">آدرس</th>
                        <th scope="col">روز</th>
                        <th scope="col">آپدیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allorders as $order)
                        <tr>
                            <th scope="row">{{$order->id}}</th>
                            <td>{{$order->name}}</td>
                            <td>{{$order->last_name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->state}}</td>
                            <td>{{$order->status}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>
                                <a href="{{route('orders.edit',$order->id)}}" class="btn btn-warning text-white mb-4 text-center">آپدیت وضعیت</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



</div>
@endsection
