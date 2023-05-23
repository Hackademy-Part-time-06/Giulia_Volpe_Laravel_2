<x-layout>
    <!--card grande di sfondo-->
    <main>
        <div class="container">
            <div class="card border-0 shadow my-5 bg-dark">
                <div class="card-body p-5 text-center">
                    <h1 class="fw-bold text-white text-center">{{ ucfirst($pokemon['name']) }}</h1>
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <figure>
                                <img src="{{ $pokemon['sprites']['front_default'] }}" class="img-fluid "
                                    alt="{{ $pokemon['name'] }}">
                                <figcaption class="text-white">Normal</figcaption>
                            </figure>
                        </div>
                        <div class="col-6 col-md-3">
                            <figure>
                                <img src="{{ $pokemon['sprites']['back_default'] }}" class="img-fluid "
                                    alt="{{ $pokemon['name'] }}">
                                <figcaption class="text-white">Normal</figcaption>
                            </figure>
                        </div>
                        <div class="col-6 col-md-3">
                            <figure>
                                <img src="{{ $pokemon['sprites']['front_shiny'] }}" class="img-fluid "
                                    alt="{{ $pokemon['name'] }}">
                                <figcaption class="text-white">Shiny</figcaption>
                            </figure>
                        </div>
                        <div class="col-6 col-md-3">
                            <figure>
                                <img src="{{ $pokemon['sprites']['back_shiny'] }}" class="img-fluid "
                                    alt="{{ $pokemon['name'] }}">
                                <figcaption class="text-white">Shiny</figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row z-2 my-5">
                            <div class="col-12 col-md-4">
                                <div class="nes-container is-rounded text-white is-dark with-title is-centered">
                                    <h5 class="title">Mosse</h5>
                                    <div class="row">
                                        @foreach ($pokemon['moves'] as $key => $move)
                                            @if ($key < 4)
                                                <div class="col-md-6 ">
                                                    <li>{{ $move['move']['name'] }}</li>
                                                </div>
                                            @else
                                            @break
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="nes-container is-rounded text-white is-dark with-title is-centered">
                                    <h5 class="title">Tipi</h5>
                                        <p>{{$pokemon['types'][0]['type']['name']}}</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</main>
</x-layout>
