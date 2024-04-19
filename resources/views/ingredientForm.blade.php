@extends('layouts.app')
@section('title',"New Ingredients")



    @section('main')

    <div class="wrapper wrapper--w680 mt-5 ">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Ingredients Form</h2>
                <form method="POST" action="{{route('ingredientPost')}}">
                    @csrf
                    <div class="row row-space">
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">Ingredient</label>
                                
                                <input class="input--style-4 col-12 " type="text" name="nom">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">Categorie</label>
                                <select name="categorie" class="input--style-4 col-12 form-select" style="margin-left: -50px;margin-top:30px">
                                    <option selected disabled>Choisir une categorie</option>
                                    @foreach ($categorie as $categories)
                                    <option value="{{$categories->id}}">{{$categories->categorie}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">Prix(ar) </label>
                                <input class="input--style-4 col-12 " type="number" name="prix">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">Calories/100g</label>
                                <input class="input--style-4 col-12 " type="number" name="calorie">

                            </div>
                        </div>
                    </div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue col-12" type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
        @endsection
