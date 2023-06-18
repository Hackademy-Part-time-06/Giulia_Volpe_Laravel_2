<x-main>
    <!-- Page Content -->
    <main>
        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5">
                    <div>
                        <form action="{{route('books.search')}}" method="POST" role="search">
                            @csrf
                            @method('POST')
                            <input class="form-control me-2 w-25 d-inline" type="search" placeholder="Search">
                            <button class="btn btn-outline-success " type="submit">Search</button>

                        </form>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="text-decoration-none fw-bold btn btn-dark mx-3" href="{{ route('books.create') }}">
                            Aggiungi un libro</a>
                        <a class="text-decoration-none fw-bold btn btn-outline-dark"
                            href="{{ route('category.create') }}"> Aggiungi una categoria</a>
                    </div>

                    <div id="success-message">
                        @if (session('success'))
                            <h4 class="fw-bold bg-success p-2 text-dark bg-opacity-50 border border-success rounded">{{ session('success') }}</h4>
                        @endif
                    </div>
                    <h1 class="fw-light text-center">I miei libri</h1>
                    <ul class="list-group list-group-flush">
                        @foreach ($books as $book)
                      
                            <div class="row ">
                                <li class="my-2">
                                    {{ $book->title }} - {{ $book->author->name }} {{$book->author->surname}}
                                    @auth
                                         <a class="btn btn-dark float-end mx-2" onclick="event.preventDefault(); document.querySelector('#delete-{{$book['id']}}').submit();">Elimina</a>
                                    <form action="{{route('books.destroy', ['book' => $book['id']])}}" method="POST" id="delete-{{$book['id']}}" class="d-none"> 
                                        @csrf
                                        @method('DELETE')</form>
                                    <a href="{{ route('books.edit', ['book' => $book['id']]) }}"
                                        class="btn btn-dark float-end mx-2">Modifica</a>
                                    @endauth                                   
                                    <a href="{{ route('books.show', ['book' => $book['id']]) }}"
                                        class="btn btn-dark float-end mx-2">Dettagli</a>
                                </li>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
</x-main>
