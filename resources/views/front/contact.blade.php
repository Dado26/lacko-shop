@extends('front.layout')

@section('title', 'Kontakt')

@section('content')
    <div class="container">
        <div class="description mt-3 mb-5">
            @if(session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif

            @include('partials.errors')
            <p class="page-title">Kontakt</p>
            <div class="row pt-4 d-flex justify-content-between">
                <div class="col-lg-4 d-none d-lg-block">
                    <img src="/img/contact_photo.jpg" class="img-thumbnail img-fluid">
                </div>
                <div class="col-lg-4 col-md-12">
                    <p>Pozovite ili pošaljite e-mail za pomoć u vezi bilo kakvih pitanja.</p>
                    <p>e-mail: <a href="mailto:lackonadezdajan@gmail.com">lackonadezdajan@gmail.com</a></p>
                    <p>Tel / Viber: 0638060539</p>
                    <p>Tel / Viber: 0638303704</p>
                    <h4 class="mt-5 mb-3">Radno Vreme</h4>
                    <p>Ponedeljak - Subota 6:00 - 22:00h</p>
                    <p>Nedelja neradna</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <form action="{{ route('email') }}" method="POST" class="contact">
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
                            <textarea class="col-lg-12 contact-message" name="message" rows="5" placeholder="Poruka"></textarea>
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
