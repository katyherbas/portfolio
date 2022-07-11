//$aPeliculas = array("Volver al futuro", "Titanic", "El día después de mañana");

$aPeliculas = ["Volver al futuro", "Titanic", "El día después de mañana"]; //Otra forma

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <div class="col-12 text-center py-5">
                <h1>Ficha Personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Fecha:</th>
                        <td>4/07/2022</td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td>34</td>
                    </tr>
                    <tr>
                        <th>Películas favoritas</th>
                        <td>volver al futuro <br> rapidos y furiosos <br> busqueda implaclable</td>
                    </tr>

                </table>

            </div>

        </div>
    </main>
</body>
</html>