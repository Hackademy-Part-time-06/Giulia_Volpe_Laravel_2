<x-main>
    <div class="container-fluid my-5 d-flex justify-content-center" id="services" data-aos="flip-left">
        <div class="row">
            <div>
                <h3 class="card-title text-center my-3">{{ $corso['Name'] }}</h3>
            <div class="col-12 col-md-4 my-3">
                <div class="card" style="width: 40rem;">
                    <img src="{{ $corso['Cover']}}" class="card-img-top" alt="lezione di pilates">
                    <div class="card-body">
                        <h5 class="card-text fw-light">{{ $corso['Descrizione'] }}</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="text-warning fw-bold">Quando: </span> {{ $corso['Giorni'] }}</li>
                            <li class="list-group-item"><span class="text-warning fw-bold">Orario: </span>{{ $corso['Orario'] }}</li>
                            <li class="list-group-item"><span class="text-warning fw-bold">Dove: </span> {{ $corso['Sala'] }}</li>
                            <li class="list-group-item"><span class="text-warning fw-bold">Con chi: </span> {{ $corso['Insegnante'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</x-main>