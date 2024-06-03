@extends('layout.base')

@section('content')
   <form action="{{ route("category.store") }}" class="mt-5" method="GET">

        @csrf
        <div class="container-fluid row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" placeholder="Entrer le nom de la catégorie" required>
                    <label for="">Entrer le nom de la catégorie</label>
                </div>
                <button  class="btn btn-primary mt-3">Soumettre</button>
            </div>
            <div class="col-xl-4"></div>
        </div>
   </form>
@endsection
