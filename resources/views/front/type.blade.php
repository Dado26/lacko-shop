@extends('front.layout')

@section('title', 'Vrste radova')

@section('content')
    <div class="container">
        <div class="description border-none mb-5">
            <p class="page-title">Vrste Radova</p>
            <div class="row mb-3">
                <div class="col-lg-4 col-md-12 col-sm-12 type-image">
                    <img src="/img/moder-room.jpg" alt="moder-room" class="img-fluid-100">
                    <div class="mt-2 mb-4"><small>Modern life style</small></div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 description-text mb-50">
                    <p>
                        Bavimo se uređenjem enterijera i exterijera u građevinarstvu. Ako vam je potrebno krečenje stana. Sa poludisperzijom
                        ili perivim akrilnim bojama. Krečenje obavljamo brzo i čisto. Takođe radimo gletovanje zidova i plafona koji su potrebni
                        da se gletuju. Dugogodisnje iskustvo možemo iskoristiti ako vam je potrebna adaptacija stana ili adaptacija kuće. Iskusni
                        moleri ako su vam potrebni molerski radovi. Potreban vam je gipsani zid? Izvodimo radove gde se koriste gipsane ploče.
                        Spušteni plafoni su nešto što može promeniti izgled celog prostora. Bavimo se izolacojom fasade sa stiroporom. Demit
                        fasada sa akrilnim završnim malterom. Izolacija zidova je nešto što se ljudima otplati za nekoliko godina. Farbanje
                        stolarije i ostale molersko farbarske radove.
                    </p>
                </div>
            </div>

            <h1 class="page-title">Paleta Boja</h1>

            <div class="color-palette">
                <ul>
                    <li>
                        <img class="col-md-4 col-sm-12" src="/img/palette/summer-delight.jpg"><span>Summer Delight</span>
                    </li>
                    <li>
                        <img class="col-md-4 col-sm-12" src="/img/palette/pink-honey.jpg"><span>Pink Honey</span>
                    </li>
                    <li>
                        <img class="col-md-4 col-sm-12" src="/img/palette/my-lady.jpg"><span>My lady</span>
                    </li>
                    <li>
                        <img class="col-md-4 col-sm-12" src="/img/palette/spring-time.jpg"><span>Spring time</span>
                    </li>
                    <li>
                        <img class="col-md-4 col-sm-12" src="/img/palette/spring-summer.jpg"><span>Spring to summer</span>
                    </li>
                    <li>
                        <img class="col-md-4 col-sm-12" src="/img/palette/blue-ice.jpg"><span>Blue ice</span>
                    </li>
                    <li>
                        <img class="col-md-4 col-sm-12" src="/img/palette/techno.jpg"><span>Techno</span>
                    </li>
                    <li>
                        <img class="col-md-4 col-sm-12" src="/img/palette/pink-bubble.jpg"><span>Pink bubble</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
