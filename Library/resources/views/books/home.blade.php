<x-main>
    <ul>
        <h1>I nostri libri</h1>
        @if (session('success'))
           <p>Salvato correttamente</p> 
        @endif
        @foreach ($books as $book)
            <li> <a class="" href="{{route('books.show', ['book'=>$book['id']])}}" target="_blank">{{ $book['title'] }} - {{ $book['author'] }}</a></li>
        @endforeach
    </ul>


</x-main>
