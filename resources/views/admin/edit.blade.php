@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-5">
            <div class="card">
                @include('partials.errors')

                <div class="card-body">
                    <h4 class="card-title">Edit admin</h4>
                    <h6 class="card-subtitle"></h6>

                    <form class="mt-3" action="{{ route('admin.update', $admin->id ) }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="PUT">
                        <label class="form-control-label" for="admin-title">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $admin->name }}" id="admin-title">

                        <label class="form-control-label" for="admin-email">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $admin->email }}" id="admin-email">

                        <label class="form-control-label" style="margin-top: 15px" for="admin-text">Password</label>
                        <input type="password" name="password" class="form-control" value="" id="admin-text">

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
