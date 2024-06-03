@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Liste des categories</h1>
            </div>
        </div>
        
        <a href="{{route("category.create")}}" class="btn btn-primary">Créer une catégorie</a>

        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                @foreach ($categories as $category)
                <div class="alert alert-success">
                    <p> {{ $category->name }} </p>
                    <a href="" class="btn btn-primary">Modifier</a>
                    <a href="" class="btn btn-danger">supprimer</a>
                </div>
                @endforeach
            </div>    
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem soluta suscipit officiis? Culpa quasi eos quae sequi sint quo cum. Accusantium saepe iste, assumenda incidunt sint nesciunt est provident veritatis?
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem soluta suscipit officiis? Culpa quasi eos quae sequi sint quo cum. Accusantium saepe iste, assumenda incidunt sint nesciunt est provident veritatis?
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem soluta suscipit officiis? Culpa quasi eos quae sequi sint quo cum. Accusantium saepe iste, assumenda incidunt sint nesciunt est provident veritatis?
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem soluta suscipit officiis? Culpa quasi eos quae sequi sint quo cum. Accusantium saepe iste, assumenda incidunt sint nesciunt est provident veritatis?
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection 