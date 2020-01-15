@extends('front.layout')
@section('content')
    

<p class="page-title">Galerija</p>

<div class="description my-5">
  <div class="">
    <ul>
      @foreach ($galleries as $galery)
    <li><a href="{{route('gallery', $galery->id) }}">{{  $galery->name  }}</a></li>
      @endforeach      
    </ul>
</div>
  <div class="" >
 {{  $gallery ?  $gallery->name : $galleries->first()->name  }} 
    <div class="">
      @if ($gallery)
      
      @foreach($gallery->pictures as $picture)
      <img src="{{ '/storage/'.$picture->url }}" style="max-width: 20%">
      @endforeach

      @else

      @foreach ($galleries->first()->pictures as $picture)
      <img src="{{ '/storage/'.$picture->url }}" style="max-width: 20%">
      @endforeach

      @endif
    </div>
</div>   
          <!-- jQuery gallery plugin -->
</div>

@endsection 