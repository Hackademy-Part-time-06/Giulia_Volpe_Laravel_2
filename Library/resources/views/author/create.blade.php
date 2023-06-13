<x-main>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="text-center">Aggiungi un autore</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{route('author.store')}}" class="w-75 m-5">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">
                                Inserisci un valore obbligatorio!
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input type="text" class="form-control" name="surname" id="surname"
                            value="{{ old('surname') }}">
                        @error('surname')
                            <span class="text-danger">
                                Inserisci un valore obbligatorio!
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Nascita</label>
                        <input type="date" class="form-control" name="birthday" id="birthday"
                            value="{{ old('birthday') }}">
                        @error('birthday')
                            <span class="text-danger">
                                Inserisci un valore numerico obbligatorio!
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark">Invia!</button>
                    <button type="reset" class="btn btn-outline-danger">Reset</button>
                    <a href="{{route('author.index')}}" class="btn btn-outline-dark">Torna indietro</a>
                </form>
            </div>
        </div>
    </div>

</x-main>
