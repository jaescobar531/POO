






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <div class="col-md-4">
            <form class="form-signin" action="validar.php?cerrar=true" method="POST">
                <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Bienvenido <?php session_start(); echo $_SESSION['nombre'] ?></h1><br> <br>
                <button type="submit" class="btn btn-lg btn-primary btn-block"  name="submit">Cerrar sesión</button>

            </form>
        </div>
    </div>
</div>
</body>
</html>