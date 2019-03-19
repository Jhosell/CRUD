<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>

    <form action="/usuarios" method="POST" role="form">
        <legend><strong>USUARIO</strong></legend>
        @csrf()

        <div class="form-group">
            <label for="">Nombre del Usuario</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Escriba el Nombre">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Escriba el Correo">
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Escriba la contrasña">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>
