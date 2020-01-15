@extends('front.layout')

@section('content')
                   
<div class="description my-5">
  @if(session()->has('success'))
  <div class="alert alert-success">{{ session()->get('success') }}</div>
  @endif
  @include('partials.errors')
        <p class="page-title">Kontakt</p>
        <p>Pozovite ili pošaljite e-mail za pomoć u vezi bilo kakvih pitanja.</p>
        <div class="row container py-5 d-flex justify-content-between">
          <div class="col-lg-6 col-md-12 card" style="width: 40rem;">
            <div class="card-body">
              <p>e-mail: <a href="mailto:lackonadezdajan@gmail.com">lackonadezdajan@gmail.com</a></p>
              <p>Tel/Viber: 0638060539</p>
              <p>Tel/Viber: 0638303704</p>
              <p class="page-title mt-5 mb-3">Radno Vreme</p>
              <p>Ponedeljak - Subota 6:00 - 22:00h</p>
              <p>Nedelja neradna</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 card" style="width: 40rem;">
            <div class="card-body">
              <form action="{{ route('email') }}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Ime">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="e-mail">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="number" placeholder="Broj telefona (opciono)">
                </div>
                <div class="form-group">
                  <textarea class="col-lg-12 contact-message" name="message" id="" rows="5"
                    placeholder="Vaša poruka"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-warning">Pošalji</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

@endsection