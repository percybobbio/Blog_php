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
        <?php foreach($posts as $post): ?>
            <div class="post">
            <article>
                <h2 class="titulo"><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['titulo'];?></a></h2>
                <p class="fecha"><?php echo fecha($post['fecha']);?></p>
                <div class="thumb">
                    <a href="single.php?id=<?php echo $post['id'];?>">
                        <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb'];?>" alt="">
                    </a>
                </div>
                <p class="extracto"><?php echo $post['extracto'];?></p>
                <a href="single.php?id=<?php echo $post['id'];?>" class="continuar">Continuar Leyendo</a>
            </article>
            </div>
        <?php endforeach; ?>
        

       

        <?php require 'paginacion.php';?>

       <?php require 'footer.php'?>
    </div>
</body>
</html>