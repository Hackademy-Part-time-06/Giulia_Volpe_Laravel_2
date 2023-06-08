<x-main>
    <!-- Page Content -->
    <main>
        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-end">
                        <a class="text-decoration-none fw-bold btn btn-dark mx-3"
                            href="{{ route('category.create') }}">Aggiungi una
                            categoria</a>
                        <a class="text-decoration-none fw-bold btn btn-outline-dark" href="{{ route('books.create') }}">
                            Aggiungi un libro</a>
                    </div>
                    <div id="success-message">
                        @if (session('success'))
                            <h4 class="fw-bold text-success">{{session('success')}}</h4>
                        @endif
                    </div>
                    <h1 class="fw-light text-center">Le mie categorie</h1>
                    <ul class="list-group list-group-flush">
                        @foreach ($categories as $category)
                            <div class="row ">
                                <li class="my-2">
                                    {{ $category->name }}
                                    @auth
                                         <a class="btn btn-dark float-end mx-2" onclick="event.preventDefault(); document.querySelector('#delete-{{$category['id']}}').submit();">Elimina</a>
                                    <form action="{{route('category.destroy', ['category' => $category['id']])}}" method="POST" id="delete-{{$category['id']}}"  class="d-none"> 
                                        @csrf
                                        @method('DELETE')</form>
                                    <a href="{{ route('category.edit', ['category' => $category['id']]) }}"
                                        class="btn btn-dark float-end mx-2">Modifica</a>
                                    @endauth                                  
                                    <a href="{{ route('category.show', ['category' => $category['id']]) }}"
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
