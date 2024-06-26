@extends('layouts.app')
@section('title',"Recette List")



    @section('main')

    <div class="wrapper wrapper--w680 mt-5 ">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Categorie Form</h2>
                <form method="POST" action="{{route('categoriePost')}}">
                    @csrf
                    <div class="row row-space">
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">Nom du Plats</label>
                                @error('categorie')
                                <p class="label" style="color: red;font-size: 12px">{{$message}}</p>
                                @enderror
                                <input class="input--style-4 col-12" type="text" name="categorie">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">Ingredients</label>
                                @error('categorie')
                                <p class="label" style="color: red;font-size: 12px">{{$message}}</p>
                                @enderror
                                <input class="input--style-4 col-12" type="text" name="categorie">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">Quantier</label>
                                @error('categorie')
                                <p class="label" style="color: red;font-size: 12px">{{$message}}</p>
                                @enderror
                                <input class="input--style-4 col-12" type="text" name="categorie">
                            </div>
                        </div>
                    </div>
                    <div class="p-t-15">
                        <button class="btn btn-warning col-3  mb-3">+</button>
                
                        <button class="btn btn--radius-2 btn--blue col-12" type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
        @endsection
