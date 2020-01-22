@extends('layout')

@section('content')
    @include('partials.errors')

    <h2 class="mb-4">Gallery: <b>{{ $gallery->name }}</b></h2>

    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <h4 class="card-title" style="padding-left:25px; padding-top:25px;">Edit gallery name</h4>
                <h6 class="card-subtitle"></h6>

                <div class="card-body" style="padding-top:0px;">
                    <form class="mt-3" _lpchecked="1" action="{{ route('gallery.update', $gallery->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <label class="form-control-label" for="gallery-name"></label>

                        <input type="text" name="name" class="form-control" value="{{ $gallery->name }}" id="gallery-name">

                        <div class="text-right" style="margin-top:20px">
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <button type="submit" class="btn btn-info" style="width: 100px">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Photo upload</h4>

                    <form action="{{ route('picture.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">

                        <fieldset class="form-group">
                            <input type="file" name="url" class="form-control-file" id="exampleInputFile">
                        </fieldset>
                        <div class="text-right" style="margin-top:32px" style="margin-bottom:0px">
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <button type="submit" class="btn btn-info" style="width: 100px">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12">
            @foreach($pictures as $picture)
                <div class="card mr-2 mb-2 d-inline-block" style="max-width:19%">
                    <div class="card-body p-4">
                        <img src="{{ '/'.$picture->url }}" style="max-width: 100%">

                        <a href="{{ route('picture.delete',  $picture->id) }}" class="btn btn-danger delete d-block w-100">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
