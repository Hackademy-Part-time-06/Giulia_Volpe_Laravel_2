<x-main>
    <!-- Page Content -->
    <main>
        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-end">
                        <a class="text-decoration-none fw-bold btn btn-dark mx-3" href="{{ route('author.create') }}">Aggiungi un autore</a>
                        
                    </div>

                    <div id="success-message">
                        @if (session('success'))
                            <h4 class="fw-bold bg-success p-2 text-dark bg-opacity-50 border border-success rounded">{{ session('success') }}</h4>
                        @endif
                    </div>
                    <h1 class="fw-light text-center">Autori</h1>
                    <ul class="list-group list-group-flush">
                        @foreach ($authors as $author)
                            <div class="row ">
                                <li class="my-2">
                                    {{ $author->name }}  {{ $author->surname }}
                                    @auth
                                         <a class="btn btn-dark float-end mx-2" onclick="event.preventDefault(); document.querySelector('#delete-{{$author['id']}}').submit();">Elimina</a>
                                    <form action="{{route('author.destroy', ['author' => $author['id']])}}" method="POST" id="delete-{{$author['id']}}" class="d-none"> 
                                        @csrf
                                        @method('DELETE')</form>
                                    <a href="{{ route('author.edit', ['author' => $author['id']]) }}"
                                        class="btn btn-dark float-end mx-2">Modifica</a>
                                    @endauth                                   
                                    <a href="{{ route('author.show', ['author' => $author['id']]) }}"
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
