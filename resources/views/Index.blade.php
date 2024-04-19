@extends('layouts.app')
@section('title','HOME-RECETTE')

    @section('content-1')
        <div class="card card-4">
            
    <center>  <h1 class="title">Liste Categorie</h1> </center>
    <br>
    <table class="table table-success table-striped">
        <tr>
            <th>ID</th>
            <th>Categorie</th>
        </tr>
            @foreach ($categorie as $categories)
            <tr>
                <td>{{ $categories -> id }}</td>
                <td>{{ $categories -> categorie }}</td>
            </tr>
            @endforeach
    </table>
</div>
    @endsection

    @section('content-2')
    <div class="card card-4">

    <center>  <h1>Liste Ingredient</h1> </center>
    <br>
    <table class="table table-success table-striped">
        <tr>
            <th>Ingredients</th>
            <th>Prix</th>
            <th>Calories 100g</th>
            <th>Categories</th>
        </tr>

        @foreach ($ingredient as $ingredients)
            <tr>
                <td>{{ $ingredients -> nom }}</td>
                <td>{{ $ingredients -> prix }}</td>
                <td>{{ $ingredients -> calories_100g }}</td>
                <td>{{ $ingredients -> categorie }}</td>

            </tr>
            @endforeach
    </table>
    </div>
    @endsection
