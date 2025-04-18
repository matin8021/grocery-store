@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">افزودن محصول</h5>
                <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                    <!-- Email input -->
                    @csrf
                    <div class="form-outline mb-4 mt-4">
                        <label>نام</label>

                        <input type="text" name="name" id="form2Example1" class="form-control" placeholder="نام" />
                    </div>

                    <div class="form-outline mb-4 mt-4">
                        <label>قیمت</label>

                        <input type="text" name="price" id="form2Example1" class="form-control" placeholder="قیمت" />
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">توضیحات</label>
                        <textarea name="description" placeholder="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">انتخاب دسته بندی</label>
                        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                            <option>--انتخاب دسته بندی--</option>
                            @foreach($allcategories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">تاریخ انقضا را انتخاب کنید</label>
                        <select name="exp_date" class="form-control" id="exampleFormControlSelect1">
                            <option>--تاریخ انقضا را انتخاب کنید--</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>

                        </select>
                    </div>

                    <div class="form-outline mb-4 mt-4">
                        <label>تصویر</label>

                        <input type="file" name="image" id="form2Example1" class="form-control" placeholder="تصویر" />
                    </div>



                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">افزودن</button>


                </form>

            </div>
        </div>
    </div>
</div>
@endsection
