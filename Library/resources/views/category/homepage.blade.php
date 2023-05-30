<x-main>
        <!-- Page Content -->
        <main>
            <div class="container">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-color" type="button"><a class="text-decoration-none fw-bold text-white"
                                    href="{{ route('books.create') }}"> Aggiungi un libro</a></button>
                            <button class="btn btn-color mx-2" type="button"><a class="text-decoration-none fw-bold text-white"
                                    href="{{ route('category.create') }}"> Aggiungi una categoria</a></button>
                        </div>
    
                        <div id="success-message">
                            @if (session('success'))
                                <h4 class="fw-bold text-success">Salvato correttamente!</h4>
                            @endif
                        </div>
                        <h1 class="fw-light text-center">Le mie categorie</h1>
                        <ul class="list-group list-group-flush">
                            @foreach ($categories as $category)
                                <li class="list-group-item fs-5"> <a class="text-decoration-none text-dark"
                                    href="{{ route('category.show', ['category' => $category['id']]) }}"
                                        target="_blank">{{$category['name']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </x-main>
    
