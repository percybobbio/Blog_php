<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/3ec0ec7a1c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <title>Blog de Percy</title>
</head>
<body>
<?php require 'header.php';?>

<div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Iniciar Sesion</h2>
               <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="password" id="password" placeholder="Contraseña">
                <input type="submit" value="Iniciar Sesion">
               </form>
               
        </div>
</div>

<?php require 'footer.php'?>

</body>
</html>