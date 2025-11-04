<?php
/*****
SUSTITUYE LAS XXX POR UN VALOR DE UNA NOTICIA DE INTERES EN ESTA CATEGORIA
*****/

$portada = [
"titulo" => "ROJAS ROJAS LEONARDO DAVID",
"autor" => "jperez",
"resumen" => "Las noticias mas importantes del 2025",
"img"=>"api/img/portada.jpg"
];
?>

<!-- Aquí se muestra la imagen -->
<img src="<?php echo $portada["img"]; ?>" alt="Imagen de la noticia" width="400">