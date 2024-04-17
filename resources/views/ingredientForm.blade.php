@extends('layouts.app')
@section('title',"NOUVEAU-INGREDIENT")



    @section('content-1')

    <form action="{{ route('ingredientPost')}}" method="post" >
        @csrf
        <h1>Formulaire Ingredient</h1>
        <div class="form-group">
            <label for="nom">Ingredients :</label>
            <input type="text" class="form-control" id="nom" placeholder="nom de l'ingredients" name="nom">
        </div>
        <br>
        <div class="form-group">
            <label for="email">Prix :   </label>
            <input type="number" min="1" class="form-control" id="email" placeholder="Prix en Ar" name="prix">
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="email">Calories par 100g :   </label>
            <input type="number" min="1"  class="form-control" id="email" placeholder="100g" name="calorie">
        </div>
        <br>
        <div class="form-group">
            <label for="motDePasse">Categorie</label>
                <select name="categorie" class="form-control">
                        @foreach ($categorie as $categories)
                            <option value="{{$categories->id}}">{{$categories->categorie}}</option>
                        @endforeach
                </select>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>


    @endsection
