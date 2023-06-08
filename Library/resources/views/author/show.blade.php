<x-main>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <div class="row">
                    <h1 class="display-5 text-center">{{ $author->name }} {{$author->surname}}</h1>
                    
                    <div class="col-12 col-md-4 text-wrap">
                       <h3>Autore: {{$author->birthday}}</h3>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>