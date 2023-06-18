<x-main>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="text-center">Modifica un libro</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--INIZIO FORM-->

                <form method="POST" action="{{ route('books.update', ['book' => $book->id]) }}" class="w-75 m-5"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <!--titolo-->
                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" id="titolo"
                            value="{{ $book->title }}">
                        @error('name')
                            <span class="text-danger">
                                Inserisci un titolo valido!
                            </span>
                        @enderror
                    </div>

                    <!--autore-->
                    <div class="mb-3">
                        <select name="author_id" id="author_id" class="form-control">
                            @forelse ($authors as $author)
                                <option value="{{ $author->name . ' ' . $author->surname }}">
                                    {{ $author->name . ' ' . $author->surname }}</option>
                            @empty
                                Nessun autore
                            @endforelse
                        </select>
                        @error('name')
                            <span class="text-danger">
                                Inserisci un autore valido!
                            </span>
                        @enderror
                    </div>

                    <!--categorie-->
                    @forelse ($categories as $category)
                        <div class="form-check">
                            <label for="categories-{{ $category->id }}" class="form-label">{{ $category->name }}</label>
                            <input class="form-check-input" type="checkbox" value="{{ $category->id }}"
                                id="categories-{{ $category->id }}" name="categories[]" @checked($book->categories->contains($category->id))>
                        </div>
                    @empty
                        Sorry, nessuna categoria
                    @endforelse

                    <!--pagine-->
                    <div class="mb-3">
                        <label for="pagine" class="form-label">Pagine</label>
                        <input type="number" class="form-control" name="pages" id="pagine"
                            value="{{ $book->pages }}">
                        @error('name')
                            <span class="text-danger">
                                Inserisci un valore numerico obbligatorio!
                            </span>
                        @enderror
                    </div>

                    <!--anno-->
                    <div class="mb-3">
                        <label for="anno" class="form-label">Anno di uscita</label>
                        <input type="number" class="form-control" name="year" id="anno"
                            value="{{ $book->year }}">
                        @error('name')
                            <span class="text-danger">
                                Inserisci un valore numerico obbligatorio!
                            </span>
                        @enderror
                    </div>

                    <!--trama-->
                    <div class="mb-3">
                        <label for="trama" class="form-label">Trama</label>
                        <input type="textarea" class="form-control" name="plot" id="trama"
                            value="{{ $book->plot }}">
                        @error('name')
                            <span class="text-danger">
                                Inserisci una trama valida!
                            </span>
                        @enderror
                    </div>

                    <!--img-->
                    <div class="mb-3">
                        <label for="image" class="form-label">Importa i tuoi file!</label>
                        <input type="file" class="form-control" name="image" id="image">
                        @error('name')
                            <span class="text-danger">
                                Inserisci un valore numerico obbligatorio!
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark">Modifica!</button>
                    <button type="reset" class="btn btn-outline-danger">Reset</button>
                    <a href="{{ route('books.home') }}" class="btn btn-outline-dark">Torna indietro</a>
                </form>
            </div>
        </div>
    </div>

</x-main>
