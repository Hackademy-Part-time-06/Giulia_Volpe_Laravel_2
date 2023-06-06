<x-main>
    <!-- Page Content -->
    <main>
        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-end">
                        <a class="text-decoration-none fw-bold btn btn-dark mx-3" href="{{ route('books.create') }}"> Aggiungi un libro</a>
                        <a class="text-decoration-none fw-bold btn btn-outline-dark" href="{{ route('category.create') }}"> Aggiungi una categoria</a>
                    </div>

                    <div id="success-message">
                        @if (session('success'))
                            <h4 class="fw-bold text-success">Salvato correttamente!</h4>
                        @endif
                    </div>
                    <h1 class="fw-light text-center">I miei libri</h1>
                    <ul class="list-group list-group-flush">
                        @foreach ($books as $book)
                            <li class="list-group-item fs-5"> <a class="text-decoration-none text-dark"
                                    href="{{ route('books.show', ['book' => $book['id']]) }}"
                                    target="_blank">{{ $book['title'] }} - {{ $book['author'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
</x-main>
