@extends('layouts.app')
@section('title','Recette Liste')

    @section('main')
        <div class="card card-4 m-6">
            
    <center>  <h1 class="title">Liste Categorie</h1> </center>
    <br>
    <table class="table table-success table-striped">
        <tr>
            <th>Plat</th>
            <th>Type</th>
        </tr>
            @foreach ($plats as $plat)
            <tr>
                <td>{{ $plat -> nom }}</td>
                <td>{{ $plat -> type }}</td>
            </tr>
            @endforeach
    </table>
</div>
    @endsection

