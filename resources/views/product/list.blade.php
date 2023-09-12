<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Gestion de Tache</title>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>List des produits</h1>
                <hr>
                <a href="/add" class="btn btn-primary">Add product</a>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Quantité</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $ide =1;
                        @endphp
                        @foreach($products as $product)
                        <tr>
                            <td>{{$ide}}</td>
                            <td>{{$product->nom}}</td>
                            <td>{{$product->quantite}}</td>
                            <td>
                                <a href="/update-product/{{$product->id}}" class="btn btn-success">Update</a>
                                <a href="/delete-product/{{$product->id}}" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                        @php
                        $ide +=1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>