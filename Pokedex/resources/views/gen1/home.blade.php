<x-layout>
    <x-navbar />
    <Header class="">
        <div class="wrapper">
            <video autoplay loop muted class="wrapper__video">
                <source src="img/pkm_opening.mp4">
            </video>
        </div>
        <div class="container my-3">
            <div class=" text-center align-items-center" id="generation">
                <div class="w-100 text-white">
                    <div class="nes-container with-title is-centered">
                        <p class="title text-dark">Generazioni</p>
                        <button type="button" class="nes-btn is-error "><a href="{{route('gen1.show')}}"
                                class="text-decoration-none text-white"> Gen 1</a></button>
                     

                    </div>

                </div>
            </div>
        </div>
    </Header>
</x-layout>
