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
                <h2 class="titulo">Editar Articulo</h2>
                    <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                        <input type="text" name="titulo" id="titulo" value="<?php echo $post['titulo']; ?>">
                        <input type="text" name="extracto" id="extracto" value="<?php echo $post['extracto']; ?>">
                        <textarea name="texto" id="texto"><?php echo $post['texto']; ?></textarea>
                        <input type="file" name="thumb" id="thumb">
                        <input type="hidden" name="thumb_guardada" value="<?php echo $post['thumb']; ?>">
                        <input type="submit" value="Modificar Articulo">
                    </form>
            </article>
        </div>
    </div>

<?php require 'footer.php';?>
</body>
</html>