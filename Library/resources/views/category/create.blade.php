<x-main>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="text-center">Aggiungi una categoria</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('category.store') }}" class="w-75 m-5">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome categoria</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">
                                Inserisci un nome valido!
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="abstract" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" name="abstract" id="abstract"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">
                                Inserisci un nome valido!
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Invia!</button>
                </form>
            </div>
        </div>
    </div>
</x-main>