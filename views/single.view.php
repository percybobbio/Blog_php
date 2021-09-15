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
                <h2 class="titulo"><?php echo $post['titulo'];?></h2>
                <p class="fecha"><?php echo fecha($post['fecha']);?></p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb'];?>" alt="<?php echo $post['titulo'];?>">
                    </a>
                </div>
               <p class="extracto"><?php echo nl2br($post['texto']);?></p>

               <p class="extracto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis, dolores blanditiis. Inventore non ab quod neque aliquid, iure repudiandae laudantium optio. Mollitia, eveniet nam amet nulla sint qui dolores facere.</p>
            </article>
        </div>


       <?php require 'footer.php'?>
    </div>
</body>
</html>