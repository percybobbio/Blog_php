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
    <?php require '../views/header.php';?>

    <div class="contenedor">
        <h2>Panel de Control</h2>
        <a href="nuevo.php" class="btn">Nuevo Post</a>
        <a href="cerrar.php" class="btn">Cerrar Sesion</a>
        <?php foreach($posts as $post): ?>
            <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['id'] . '.-' . $post['titulo']; ?></h2>
                <a href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
                <a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
                <a href="../borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
            </article>
            </div>
        <?php endforeach; ?>
        

       

        <?php require '../paginacion.php';?>

       <?php require '../views/footer.php'?>
    </div>
</body>
</html>