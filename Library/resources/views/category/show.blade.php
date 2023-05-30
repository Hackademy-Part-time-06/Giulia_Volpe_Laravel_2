<x-main>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <div class="row">
                    <h1 class="display-5 text-center fs-3 text-dark">{{ $category->name}}</h1>
                        <p>{{$category->abstract}}</p>                  
                </div>
            </div>
        </div>
    </div>
</x-main>