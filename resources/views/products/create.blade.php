@extends('layout.base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4">
                <h1>Crée un produit</h1><br />

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif

                <form action="{{ route('product.store') }}" method="post" enctype="multipart/from-data">
                    @csrf
                    <label for="name">Nom du produit</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="saisir le nom du produit ici..."><br />

                    <label for="price">Prix du produit</label>
                    <input type="number" name="price" id="price" min="100" max="1000000" value="100"
                        class="form-control"><br />

                    <label for="description">Description du produit</label>
                    <textarea name="description" id="description" rows="4" placeholder="Saisir la description ici..."
                        class="form-control"></textarea><br />

                    <div>
                        <label for="file">Image de couverture</label>
                        <input type="file" name="file" id="file" placeholder="Inserer un ficher"
                            class="form-control">
                    </div><br />
                    <button type="submit" class="btn btn-primary">Publier</button>
                </form>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
@endsection
