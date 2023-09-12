<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Gestion de Tache</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <hr>
                <h1>Ajouter un produit</h1>
                <hr>
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>

                @endif
                <form action="/add/traitement" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="mb-3">
                        <label for="quantite" class="form-label">Quantité</label>
                        <input type="number" class="form-control" id="quantite" name="quantite">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <br> <br>
                    <a href="/product" class="btn btn-danger">Revenir à la liste des produits</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>