
@extends('layout')

@section('content')

<div class="row">
  <div class="col-sm-12 col-md-4 col-lg-4">
    <div class="card">
        @include('partials.errors')

        <div class="card-body">
            <h4 class="card-title">Create admin</h4>
            <h6 class="card-subtitle"></h6>

            <form class="mt-3" action="{{ route('admin.store') }}" method="POST">
                {!! csrf_field() !!}
                <label class="form-control-label" for="admin-title">Name</label>
                <input type="text" name="name" class="form-control" value="" id="admin-title">

                <label class="form-control-label" for="admin-email">Email</label>
                        <input type="text" name="email" class="form-control" value="" id="admin-email">

                <label class="form-control-label" style="margin-top: 15px" for="admin-password">Password</label>
                <input type="password" name="password" class="form-control" value="" id="admin-password">

                <label class="form-control-label" style="margin-top: 15px" for="admin-repeat">Repeat password</label>
                <input type="password" name="password_confirmation" class="form-control" value="" id="admin-repeat">

                <div class="text-right" style="margin-top:20px">
                    <button type="submit" class="btn btn-info" style="width: 100px">Save</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

@endsection