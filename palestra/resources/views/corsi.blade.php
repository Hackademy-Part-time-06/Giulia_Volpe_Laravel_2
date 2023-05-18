<x-main>

    @foreach ($corsi as $corso)
        <x-card :corso="$corso" />
    @endforeach

</x-main>
