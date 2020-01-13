@extends('layout')

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif

    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="card">
                <h4 class="card-title m-4">News</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Text</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $new)
                            <tr>
                                <th scope="row">{{ $new->id }}</th>
                                <td>{{ Str::limit($new->title, 40)  }}</td>
                                <td>{{ Str::limit($new->text, 220) }}</td>
                                <td>{{ $new->created_at->format('d.m.Y') }}</td>
                                <td>{{ $new->updated_at->format('d.m.Y') }}</td>
                                <td style="width: 200px">
                                    <div class="text-left">
                                        <form action="{{ route('news.delete', $new->id) }}" method="POST" style="display: inline" class="delete">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="button" class="btn btn-dark btn-delete">Delete</button>
                                        </form>

                                        <a href="{{ route('news.edit', $new->id) }}" class="btn btn-info" style="width: 90px">Edit</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                @include('partials.errors')

                <div class="card-body">
                    <h4 class="card-title">Create news</h4>
                    <h6 class="card-subtitle"></h6>
                    <form class="mt-3" _lpchecked="1" action="{{ route('news.store') }}" method="POST">
                        {!! csrf_field() !!}

                        <label class="form-control-label" for="news-title-2">Title</label>
                        <input type="text" name="title" class="form-control" value="" id="news-title-2">

                        <label class="form-control-label" style="margin-top: 15px" for="news-text-2">Text</label>
                        <textarea name="text" class="form-control" id="news-text-2" rows="5"></textarea>

                        <div class="text-right" style="margin-top:20px">
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <button type="submit" class="btn btn-info" style="width: 100px">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="pagination-container mb-3 text-center">
            {!! $news->render() !!}
        </div>
    </div>
@endsection
