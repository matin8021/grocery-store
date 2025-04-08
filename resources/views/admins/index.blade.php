@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">محصولات</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
                <p class="card-text">تعداد محصولات : {{$productsCount}}</p>

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">سفارش ها</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
                <p class="card-text">تعداد سفارشات : {{$ordersCount}}</p>

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">دسته بندی ها</h5>

                <p class="card-text">تعداد دسته بندی ها : {{$categoriesCount}}</p>

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">مدیر ها</h5>

                <p class="card-text">تعداد مدیر ها : {{$adminsCount}}</p>

            </div>
        </div>
    </div>
</div>
@endsection
