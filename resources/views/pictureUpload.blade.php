@extends('layout')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Picture Upload</h4>
                    <form action="{{ route('picture.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                <input type="file" name="url" class="custom-file-input" id="inputGroupFile01">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="mr-sm-2" for="inputSuccess1">Name</label>
                            <input type="text" name="name" class="form-control" id="inputSuccess1">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Select gallery</label>
                            <select name="gallery_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                @foreach($galleries as $gallery)
                                    <option value="{{ $gallery->id }}">{{$gallery->name  }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-right" style="margin-top:20px">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
