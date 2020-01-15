@extends('front.layout')
@section('content')
<div class="description my-5">
  <p class="page-title">Aktuelnosti</p>

  @foreach ($news as $new)
  <div class="mt-5">
  <p class="action-title">{{$new->title}}</p>
    <div class="ml-3">
    <p class="action-description">{{ $new->text }}</p>
    <small>{{ $new->created_at }}</small>
    </div>
  </div>
  @endforeach
 
</div>
@endsection