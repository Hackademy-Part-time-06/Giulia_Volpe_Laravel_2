<x-layout>
    <!--card grande di sfondo-->
    <main>
        <div class="container">
            <div class="card border-0 shadow my-5 
            @if ($poke2['types'][0]['type']['name'] == 'fire') fire @endif
            @if ($poke2['types'][0]['type']['name'] == 'grass') grass @endif
            @if ($poke2['types'][0]['type']['name'] == 'water') water @endif
            @if ($poke2['types'][0]['type']['name'] == 'bug') bug @endif
            @if ($poke2['types'][0]['type']['name'] == 'dragon') dragon @endif
            @if ($poke2['types'][0]['type']['name'] == 'electric') electric @endif
            @if ($poke2['types'][0]['type']['name'] == 'fighting') fighting @endif
            @if ($poke2['types'][0]['type']['name'] == 'flying') flying @endif
            @if ($poke2['types'][0]['type']['name'] == 'ghost') ghost @endif
            @if ($poke2['types'][0]['type']['name'] == 'ground') ground @endif
            @if ($poke2['types'][0]['type']['name'] == 'ice') ice @endif
            @if ($poke2['types'][0]['type']['name'] == 'normal') normal @endif
            @if ($poke2['types'][0]['type']['name'] == 'poison') poison @endif
            @if ($poke2['types'][0]['type']['name'] == 'psychic') psychic @endif
            @if ($poke2['types'][0]['type']['name'] == 'rock') rock @endif
            @if ($poke2['types'][0]['type']['name'] == 'dark') dark @endif
            @if ($poke2['types'][0]['type']['name'] == 'steel') steel @endif">
                <div class="card-body p-5 text-center">
                    <h1 class="fw-bold text-white text-center">{{ ucfirst($poke2['name']) }}</h1>
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <figure class="">
                                <img src="{{ $poke2['sprites']['front_default'] }}" class="img-fluid bg-white round"
                                    alt="{{ $poke2['name'] }}">
                                <figcaption class="text-white">Normal</figcaption>
                            </figure>
                        </div>
                        <div class="col-6 col-md-3">
                            <figure>
                                <img src="{{ $poke2['sprites']['back_default'] }}" class="img-fluid bg-white round"
                                    alt="{{ $poke2['name'] }}">
                                <figcaption class="text-white">Normal</figcaption>
                            </figure>
                        </div>
                        <div class="col-6 col-md-3">
                            <figure>
                                <img src="{{ $poke2['sprites']['front_shiny'] }}" class="img-fluid bg-white round"
                                    alt="{{ $poke2['name'] }}">
                                <figcaption class="text-white">Shiny</figcaption>
                            </figure>
                        </div>
                        <div class="col-6 col-md-3">
                            <figure>
                                <img src="{{ $poke2['sprites']['back_shiny'] }}" class="img-fluid bg-white round"
                                    alt="{{ $poke2['name'] }}">
                                <figcaption class="text-white">Shiny</figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row z-2 my-5">
                            <div class="col-12 col-md-4">
                                <div class="nes-container is-rounded text-white is-dark with-title is-centered" style="height: 14rem;">
                                    <h5 class="title">Moves</h5>
                                    <ul class="list-group">
                                        @foreach ($poke2['moves'] as $key => $move)
                                            @if ($key < 4)
                                                <li class="list-group-item bg-dark text-white p-1">
                                                    {{ $move['move']['name'] }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="nes-container is-rounded text-white is-dark with-title is-centered" style="height: 7rem;">
                                    <h5 class="title">Types</h5>
                                    <ul class="list-group">
                                        @foreach ($poke2['types'] as $key => $type)
                                            @if ($key < 4)
                                                <li class="list-group-item bg-dark text-white p-1" >{{ $type['type']['name'] }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                @if ($poke2['held_items'])
                                    <div class="nes-container is-rounded text-white is-dark with-title is-centered" style="height: 7rem;">
                                        <h5 class="title">Items</h5>
                                        <ul class="list-group">
                                            @foreach ($poke2['held_items'] as $key => $item)
                                                @if ($key < 2)
                                                    <li class="list-group-item bg-dark text-white p-1">{{ $item['item']['name'] }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="nes-container is-rounded text-white is-dark with-title is-centered" style="height: 14rem;">
                                    <h5 class="title">Abilities</h5>
                                    <ul class="list-group">
                                        @foreach ($poke2['abilities'] as $key => $ability)
                                            @if ($key < 4)
                                                <li class="list-group-item bg-dark text-white p-1">{{ $ability['ability']['name'] }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </main>
</x-layout>
