<?php
/*****
SUSTITUYE LAS XXX POR UN VALOR DE UNA NOTICIA DE INTERES EN ESTA CATEGORIA
*****/
$portada = [
    "titulo" => "ROJAS ROJAS LEONARDO DAVID",
    "autor" => "jperez",
    "resumen" => "Las noticias más importantes del 2025",
    "img" => "../img/portada.jpg"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $portada["titulo"]; ?></title>
</head>
<body>

    <h1><?php echo $portada["titulo"]; ?></h1>
    <p><strong>Autor:</strong> <?php echo $portada["autor"]; ?></p>
    <p><?php echo $portada["resumen"]; ?></p>

    <!-- Aquí se muestra la imagen -->
    <img src="<?php echo $portada["img"]; ?>" alt="Imagen de portada" width="300">

</body>
</html>
