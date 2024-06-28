@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">افزودن دسته بندی</h5>
                <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
                    <!-- Email input -->
                    @csrf
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="icon" id="form2Example1" class="form-control" placeholder="icon" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <label>تصویر</label>

                        <input type="file" name="image" id="form2Example1" class="form-control" placeholder="image" />
                    </div>


                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">افزودن</button>


                </form>

            </div>
        </div>
    </div>
</div>
@endsection
