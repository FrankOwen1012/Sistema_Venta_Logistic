<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/register.css">
    <title>Registrate</title>
</head>

<body>
    <form class="form" id="nuevo-cliente" action="/conexion/insertarCliente.php">
        <h2 class="form__title">Registrarse</h2>

        <div class="form__container">
            <div class="form__group">
                <input type="text" id="user" class="form__input" placeholder=" " name="user" required>
                <label for="name" class="form__label">Usuario: </label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="nombre" class="form__input" placeholder=" " name="nombre" required>
                <label for="name" class="form__label">Nombre </label>
                <span class="form__line"></span>
            </div>

            <div class="form__group">
                <input type="text" id="apellido" class="form__input" placeholder=" " name="apellido" required>
                <label for="name" class="form__label">Apellidos </label>
                <span class="form__line"></span>
            </div>

 
            <div class="form__group">
                <input type="text" id="pass" class="form__input" placeholder=" " name="pass" required>
                <label for="name" class="form__label">Contraseña : </label>
                <span class="form__line"></span>
            </div>

            <div class="form__group">
                <input type="text" id="telefono" class="form__input" placeholder=" " name="telefono" required>
                <label for="name" class="form__label">Nº Telefono: </label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="direccion" class="form__input" placeholder=" " name="direccion" required>
                <label for="name" class="form__label">Direccion : </label>
                <span class="form__line"></span>
            </div>






            <input type="submit" id="submit" class="form__submit" value="Registrarse">


        </div>
    </form>
</body>

</html>