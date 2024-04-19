<style>
    body
    {
        background-image: url('{{asset('image/back.webp')}}');

    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">SAKAFO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" href="{{route('home')}}">Accueil</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::path() == 'ingredientForm' ? 'active' : '' }}" href="{{route('ingredientForm')}}">New Ingredient</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::path() == 'categorieForm' ? 'active' : '' }}" href="{{route('categorieForm')}}">New Categories</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::path() == '#' ? 'active' : '' }}" href="#">New Recette</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<script>
    
</script>
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error )
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color: red">
            <strong>ERROR!</strong> {{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endforeach
    @endif --}}
