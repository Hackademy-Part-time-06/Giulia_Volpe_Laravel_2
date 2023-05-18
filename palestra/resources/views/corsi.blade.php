<x-main>
    <div class="container row row-cols-3 mx-auto">

                @foreach ($corsi as $corso)
                    <x-card :corso="$corso" />
                @endforeach
    </div>


</x-main>
