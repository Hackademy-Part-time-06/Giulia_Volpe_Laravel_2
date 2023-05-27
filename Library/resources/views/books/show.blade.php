<x-main>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <div class="row">
                    <h2 class="display-5 text-center">{{ $book->title }}</h2>
                    <div class="col-12 col-md-6">
                        <p>Autore: {{ $book->author }} </p>
                        <p>Anno di uscita: {{ $book->year }}</p>
                        <p>Numero Pagine: {{ $book->pages }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>
