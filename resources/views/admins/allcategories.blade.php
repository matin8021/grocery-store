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
                    @if (\Session::has('update'))
                        <div class="alert alert-success">
                            <p>{!! \Session::get('update') !!}</p>
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
                <h5 class="card-title mb-4 d-inline">دسته بندی ها</h5>
                <a  href="{{route('categories.create')}}" class="btn btn-primary mb-4 text-center float-right">افزودن دسته بندی</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">نام</th>
                        <th scope="col">آپدیت</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allcategories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td><a  href="{{route('categories.edit',$category->id)}}" class="btn btn-warning text-white text-center ">آپدیت</a></td>
                            <td><a href="{{route('categories.delete',$category->id)}}" class="btn btn-danger  text-center ">حذف</a></td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
