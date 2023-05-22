<x-layout>
    <!--card grande di sfondo-->
    <div class="container"> 
        <div class="card border-0 shadow my-5 bg-dark">
            <div class="card-body p-5">
                <h1 class="fw-light">Fixed Full Page Background Image</h1>
                <!--card singola-->

                <div class="row">
                    <div class="col-4">
                        @foreach ($pokemonList as $pokemon)
                            <div class="card" style="width: 18rem;">
                                <img src="{{ $pokemon['sprites']['front_default'] }}" class="card-img-top"
                                    alt="{{ $pokemon['name'] }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $pokemon['name'] }}</h5>
                                    <a href="#" class="btn btn-primary">More</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!--fine card singola-->
                <div style="height: 700px"></div>
            </div>
        </div>
    </div>
</x-layout>
