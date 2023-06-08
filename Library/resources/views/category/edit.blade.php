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
                <form method="POST" action="{{ route('category.update', ['category' => $category->id]) }}" class="w-75 m-5">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"></label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $category->name }}">
                        @error('name')
                            <span class="text-danger">
                                Inserisci un nome valido!
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="abs" class="form-label"></label>
                        <input type="text" class="form-control" name="abs" id="abs"
                            value="{{ $category->abstract }}">
                        @error('abs')
                            <span class="text-danger">
                                Inserisci un abs valido!
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica!</button>
                    
                </form>
            </div>
        </div>
    </div>

</x-main>
