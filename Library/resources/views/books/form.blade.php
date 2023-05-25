<x-main>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('books.store') }}" class="w-75 m-5">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="titolo" value="{{ old('title') }}">
            @error('name')
                <span class="text-danger">
                    Inserisci un valore obbligatorio!
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="autore" class="form-label">Autore</label>
            <input type="text" class="form-control" name="author" id="autore" value="{{ old('author') }}">
            @error('name')
                <span class="text-danger">
                    Inserisci un valore obbligatorio!
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pagine" class="form-label">Pagine</label>
            <input type="text" class="form-control" name="pages" id="pagine" value="{{ old('pages') }}">
            @error('name')
                <span class="text-danger">
                    Inserisci un valore numerico obbligatorio!
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="anno" class="form-label">Anno</label>
            <input type="text" class="form-control" name="year" id="anno" value="{{ old('year') }}">
            @error('name')
                <span class="text-danger">
                    Inserisci un valore numerico obbligatorio!
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Invia!</button>
    </form>

</x-main>
