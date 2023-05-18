<div class="container-fluid my-5">
    <div class="row">
        <div class=" col-4 my-3">
            <div class="card" style="width: 18rem;  height: 32rem;">
                <img src="{{ $corso['Cover'] }}" class="card-img-top" alt="lezione di pilates">
                <div class="card-body">
                    <h5 class="card-title">{{ $corso['Name'] }}</h5>
                    <p class="card-text">{{ $corso['Descrizione'] }}</p>
                    <a href="" class="btn btn-primary">Di più</a>
                </div>
            </div>
        </div>
    </div>
</div>
