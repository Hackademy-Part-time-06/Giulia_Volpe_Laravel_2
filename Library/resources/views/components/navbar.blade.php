 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
     <div class="container">
         <a class="navbar-brand" href="{{ route('books.home') }}">MyLibrary</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
             aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="justify-content-end">
             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <li class="nav-item dropdown mx-3">
                     <a class="nav-link  text-dark fs-5" href="#" role="button"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         Libri
                     </a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="{{ route('books.home') }}">Libri</a></li>
                         <li><a class="dropdown-item" href="{{ route('books.create') }}">Aggiungi un libro</a></li>
                     </ul>
                 </li>
                 <li class="nav-item dropdown mx-3">
                     <a class="nav-link text-dark fs-5" href="#" role="button"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         Categorie
                     </a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="{{ route('category.home') }}">Categorie</a></li>
                         <li><a class="dropdown-item" href="{{ route('category.create') }}">Aggiungi una categoria</a>
                         </li>
                     </ul>
                 </li>
                 @auth
                     <li class="nav-item dropdown mx-3">
                         <a class="nav-link  text-dark fs-5" href="#" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Benvenuto {{ Auth::user()->name }}
                         </a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="{{ route('register') }}"></a></li>
                             <li><a class="dropdown-item" href=""
                                     onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                                     Logout</a></li>
                             <form method="POST" action="{{ route('logout') }}" class="d-none" id="form-logout">@csrf
                             </form>
                         </ul>
                     </li>
                 @else
                     <li class="nav-item dropdown mx-3">
                         <a class="nav-link text-dark fs-5" href="#" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Benvenuto Ospite
                         </a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                             <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                         </ul>
                     </li>
                 @endauth
                 </li>
                 </ul>
             </div>
         </div>
     </div>
 </nav>
