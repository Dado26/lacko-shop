@extends('front.layout')

@section('title', 'Početna')

@section('content')

    <div class="container">
        <div class="bg-colors"></div>

        <div class="description border-none pt-0 pb-2">
            <h1 class="description-title mb-3">Braća Lacko iz Padine:</h1>
            <p>
                Preko 20 godina ulepšavamo vaše domove! Naša želja je da sa lepim i usklađenim bojama stvorimo udoban i moderan prostor
                u vašim domovima. Boje svakodnevno utiču na naš život i zato biramo najbolje i sa stilom.
            </p>
            <p>
                Većina naših poslova se obavlja u Beogradu, Pančevu i u okolnim mestima. Ali nemamo problem da dođemo i u druga mesta...
            </p>
            <ul>
                <li>Krečenje (Od poludisperzije do akrilnih boja)</li>
                <li>Gletujemo</li>
                <li>Postavljamo sve vrste tapeta</li>
                <li>Po vašoj zamisli i ideji obavljamo sve vrste gipsanih radova</li>
                <li>Spušteni plafoni</li>
                <li>Pregradni zidovi</li>
                <li>Police i mnogo drugih radova</li>
                <li>Farbanje stolarije</li>
                <li>Farbanje radijatora</li>
                <li>Saniranje starih zidova sa mrežom i gipsanim pločama</li>
                <li>Izolacija fasade stiroporom</li>
            </ul>
            <P>
                Ako vam je potrebno da u vašem domu sačuvate toplotu zimi a svežinu leti postavljamo izolaciju stiroporom kao i kamenom
                vunom na vasu fasadu. Efikasno i brzo obavljamo adaptaciju vaših stanova.
            </P>
            <p>
                Za svaku informaciju slobodno nazovite!
            </p>
        </div>

        <div class="row d-flex justify-content-between ml-4 mr-4 my-5">
            <div class="thumbnail">
                <a href="{{route('news')}}"><img src="img/latest-colors.png" alt=""></a>
            </div>
            <div class="thumbnail">
                <a href="{{route('type')}}"><img src="img/inspiration.png" alt=""></a>
            </div>
            <div class="thumbnail">
                <a href="{{route('contact')}}"><img src="img/color-expert.png" alt=""></a>
            </div>
        </div>
    </div>
@endsection
