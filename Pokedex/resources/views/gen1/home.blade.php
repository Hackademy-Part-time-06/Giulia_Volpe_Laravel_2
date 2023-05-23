<x-layout>
    <Header class="">
        <div class="wrapper">
            <video autoplay loop muted class="wrapper__video">
                <source src="img/pkm_opening.mp4">
            </video>
        </div>
        <div class="container my-3">
            <div class=" text-center align-items-center" id="generation">
                <div class="w-25 text-white">
                    <div class="nes-container with-title is-centered">
                        <button type="button" class="nes-btn title is-error text-dark"> Gen 1</button>
                        <ul class="list-group">
                            @foreach ($pokemon as $pkm)
                            <li class="list-group-item text-dark">
                                <a href="{{route('gen1.show', ['name'=> $pkm['name']])}}" class="text-decoration-none text-dark">{{ucfirst($pkm['name'])}}</a>
                            </li>  
                            @endforeach

                        </ul>
                  </div>

                </div>
            </div>
        </div>
    </Header>
</x-layout>
