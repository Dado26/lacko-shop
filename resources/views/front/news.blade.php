@extends('front.layout')

@section('title', 'Aktuelnosti')

@section('content')
<div class="container">
  <div class="description mt-3 mb-5">
    <p class="page-title">Aktuelnosti</p>

    @foreach ($news as $new)
    <div>
      <p class="action-title">{{$new->title}}</p>
      <div class="ml-3">
        <p class="action-description">{{ $new->text }}</p>
        {{--<small>{{ $new->created_at }}</small>--}}
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
