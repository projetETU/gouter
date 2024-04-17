@extends('layouts.app')
@section('title',"NOUVEAU-INGREDIENT")



    @section('content-1')

    <div class="wrapper wrapper--w680 mt-5 ">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Categorie Form</h2>
                <form method="POST" action="{{route('categoriePost')}}">
                    @csrf
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Categorie name</label>
                                <input class="input--style-4 col-12" type="text" name="categorie">
                            </div>
                        </div>
                        {{-- <div class="col-2">
                            <div class="input-group">
                                <label class="label">last name</label>
                                <input class="input--style-4" type="text" name="last_name">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Birthday</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Gender</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Male
                                        <input type="radio" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Female
                                        <input type="radio" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Phone Number</label>
                                <input class="input--style-4" type="text" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="label">Subject</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="subject">
                                <option disabled="disabled" selected="selected">Choose option</option>
                                <option>Subject 1</option>
                                <option>Subject 2</option>
                                <option>Subject 3</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div> --}}
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue col-12" type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
        @endsection
