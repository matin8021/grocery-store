@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">افزودن ادمین</h5>
                <form method="POST" action="{{route('admins.store')}}" enctype="multipart/form-data">
                    <!-- Email input -->
                    @csrf
                    <div class="form-outline mb-4 mt-4">
                        <input type="email" name="email" id="form2Example1" class="form-control" placeholder="ایمیل" />

                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="name" id="form2Example1" class="form-control" placeholder="نام" />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="form2Example1" class="form-control" placeholder="پسورد" />
                    </div>







                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">افزودن</button>


                </form>

            </div>
        </div>
    </div>
</div>

@endsection
