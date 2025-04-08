@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{!! \Session::get('success') !!}</p>
                            </div>
                        @endif
                    </div>

                    <div class="container">
                        @if (\Session::has('delete'))
                            <div class="alert alert-success">
                                <p>{!! \Session::get('delete') !!}</p>
                            </div>
                        @endif
                    </div>
                    <h5 class="card-title mb-4 d-inline">محصولات</h5>
                    <a  href="{{route('products.create')}}" class="btn btn-primary mb-4 text-center float-right">افزودن محصول</a>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">محصول</th>
                            <th scope="col">قیمت به ریال</th>
                            <th scope="col">تاریخ انقضا</th>
                            <th scope="col">حذف</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach($allproducts as $product)
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->exp_date}}</td>
                                    <td><a href="{{route('products.delete' , $product->id)}}" class="btn btn-danger  text-center ">حذف</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
