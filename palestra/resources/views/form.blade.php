<x-main>
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contattaci</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('send') }}" method="POST">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label text-white">Nome<i
                            class="bi bi-person-fill ms-1"></i></label>
                    <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Email<i
                            class="bi bi-envelope-fill ms-1"></i></label>
                    <input name="email" type="text" class="form-control" id="email" value="{{old('email')}}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label text-white">Telefono<i
                            class="bi bi-telephone-fill ms-1"></i></label>
                    <input name="phone" type="text" class="form-control" id="phone" value="{{old('phone')}}">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label text-white">Messaggio<i
                            class="bi bi-chat-fill ms-1"></i></label>
                    <input name="text" type="text" class="form-control" id="message" style="height: 10rem;" value="{{old('message')}}">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Invia</button>
                </div>
            </form>

        </div>
    </section>
</x-main>
