@extends('front.layout')

@section('title', 'Galerija')

@section('content')
    <div class="container">
        <div class="description mt-3 mb-5">
            <p class="page-title">Galerija</p>

            <div class="row">
                <div class="col-md-3">
                    <div class="side-menu">
                        @foreach ($galleries as $gallery)
                            <a class="item" href="{{ route('gallery', $gallery->id) }}">{{ $gallery->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-9">
                    <div id="gallery" style="display:none;">
                        @if ($gallery)
                            @foreach($gallery->pictures as $picture)
                                <a href="#"><img alt="{{$gallery->name }}" src="{{ '/storage/'.$picture->thumbnail }}" data-image="{{'/storage/'.$picture->url}}"></a>
                            @endforeach
                        @else
                            @foreach ($galleries->first()->pictures as $picture)
                                <a href="#"><img alt="{{ $galleries->first()->name }}" src="{{ '/storage/'.$picture->url}}" data-image="{{'/storage/'.$picture->thumbnail}}"></a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/unitegallery/dist/css/unite-gallery.css" type="text/css"/>
@endsection

@section('script')
    <!-- unitegallery links -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/unitegallery/dist/js/unitegallery.min.js"></script>
    <script type="text/javascript" src="/unitegallery/dist/themes/tiles/ug-theme-tiles.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#gallery").unitegallery({
                tiles_type: "nested"
            });
        });
    </script>
@endsection
