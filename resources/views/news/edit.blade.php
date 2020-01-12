@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-5">
            <div class="card">
                @include('partials.errors')

                <div class="card-body">
                    <h4 class="card-title">Edit News</h4>
                    <h6 class="card-subtitle"></h6>

                    <form class="mt-3" action="{{ route('news.update', $news->id ) }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="PUT">
                        <label class="form-control-label" for="news-title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $news->title }}" id="news-title">

                        <label class="form-control-label" style="margin-top: 15px" for="news-text">Text</label>
                        <textarea name="text" class="form-control" id="news-text" rows="5">{{ $news->text }}</textarea>

                        <div class="text-right" style="margin-top:20px">
                            <button type="submit" class="btn btn-info" style="width: 100px">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
