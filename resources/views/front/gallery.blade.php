@extends('front.layout')
@section('content')
    
<div class="container">
  <div class="description mt-3 mb-5">
    <p class="page-title">Galerija</p>

    <div class="row">
      <div class="col-md-3">
        <div class="side-menu">
          @foreach ($galleries as $galery)
          <a class="item" href="{{route('gallery', $galery->id) }}">{{  $galery->name  }}</a>
          @endforeach      
    </div>
      </div>
      <div class="col-md-9">
    <div id="gallery" style="display:none;">
      
      @if ($gallery)
      
      @foreach($gallery->pictures as $picture)
     
      <a href="#"><img alt="{{$gallery->name }}" src="{{ '/storage/'.$picture->url }}" data-image="{{'/storage/'.$picture->thumbnail}}"></a>
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

@section('gallery-script')
<!-- unitegallery links -->
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script type='text/javascript' src='/unitegallery/dist/js/unitegallery.js'></script>
<script type='text/javascript' src='/unitegallery/dist/themes/tiles/ug-theme-tiles.js'></script>

<script type="text/javascript">
$(document).on('load', function(){

  $("#gallery").unitegallery({
    tiles_type:"nested"
  });

});
</script>
@endsection