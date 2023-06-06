<x-main>

    {{-- form --}}

        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5">
                    <h1 class="text-center">Registrati</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{route('register')}}" class="w-75 m-5" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        {{-- campo 1 --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome utente</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">
                                    Inserisci un valore obbligatorio!
                                </span>
                            @enderror
                        </div>
                        {{-- campo 2 --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">
                                    Inserisci un valore obbligatorio!
                                </span>
                            @enderror
                        </div>
                        {{-- campo 3 --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                value="{{ old('title') }}">
                            @error('password')
                                <span class="text-danger">
                                    Inserisci un valore obbligatorio!
                                </span>
                            @enderror
                        </div>
                        {{--campo 4--}}
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Conferma Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                value="{{ old('password') }}">
                            @error('password')
                                <span class="text-danger">
                                    Inserisci un valore obbligatorio!
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark">Registrami!</button>
                        <a class="btn btn-outline-dark" href="{{route('login')}}">Già iscritto?</a>
                    </form>
                </div>
            </div>
        </div>

</x-main>
