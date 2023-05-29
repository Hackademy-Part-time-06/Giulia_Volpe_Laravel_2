<x-main>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <div class="row">
                    <h1 class="display-5 text-center">{{ $book->title }}</h1>
                    <div class="col-12 col-md-6">
                        <img class="img-fluid" style="height: 24rem;" src="{{Storage::url($book->image)}}" alt="">
                    </div>
                    <div class="col-12 col-md-4 text-wrap">
                       <h3>Autore: {{$book->author}}</h3>
                       <h5 class="fw-bold">Trama</h5>
                       <p class="lh-base">{{$book->plot}}</p>
                       <span><strong> Pagine:</strong> {{$book->pages}}</span>
                       <span><strong> Anno di uscita:</strong> {{$book->year}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>
