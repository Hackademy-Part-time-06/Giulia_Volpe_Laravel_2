<x-layout>
    <!--HEADER-->
    <Header class="">
        <div class="wrapper">
            <video autoplay loop muted class="wrapper__video">
                <source src="img/pkm_opening.mp4">
            </video>
        </div>
    </Header>

    <!--MAIN-->

    <main id="generation">
        <div class="container my-3">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class=" text-center align-items-center">
                        <div class="text-white">
                            <div class="nes-container with-title is-centered">
                                <button type="button" class="nes-btn title is-error text-dark"> Gen 1</button>
                                <ul class="list-group">
                                    @foreach ($pokemon as $pkm)
                                        <li class="list-group-item text-dark">
                                            <a href="{{ route('gen1.show', ['name' => $pkm['name']]) }}"
                                                class="text-decoration-none text-dark">{{ ucfirst($pkm['name']) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class=" text-center align-items-center" id="generation">
                        <div class="text-white">
                            <div class="nes-container with-title is-centered">
                                <button type="button" class="nes-btn title is-error text-dark"> Gen 2</button>
                                <ul class="list-group">
                                    @foreach ($poke2 as $pkm)
                                        <li class="list-group-item text-dark">
                                            <a href="{{route('gen2.show', ['name'=> $pkm['name']])}}"
                                                class="text-decoration-none text-dark">{{ ucfirst($pkm['name']) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class=" text-center align-items-center" id="generation">
                        <div class="text-white">
                            <div class="nes-container with-title is-centered">
                                <button type="button" class="nes-btn title is-error text-dark"> Gen 3</button>
                                <ul class="list-group">
                                    @foreach ($poke3 as $pkm)
                                        <li class="list-group-item text-dark">
                                            <a href="{{route('gen3.show', ['name'=> $pkm['name']])}}"
                                                class="text-decoration-none text-dark">{{ ucfirst($pkm['name']) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


</x-layout>






