 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
    <div class="container">
      <a class="navbar-brand" href="{{route('books.home')}}">MyLibrary</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-dark fs-5" href="{{route('books.home')}}">Libri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark fs-5" href="{{route('category.home')}}">Categorie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark fs-5" href="{{route('books.create')}}">Aggiungi libri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark fs-5" href="{{route('category.create')}}">Aggiungi categorie</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>