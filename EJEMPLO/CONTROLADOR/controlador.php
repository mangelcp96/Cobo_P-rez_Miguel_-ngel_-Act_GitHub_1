<?php
    // Incluir la lógica del modelo
    require_once('./MODELO/modelo.php');
    // Obtener la lista de artículos
    $articulos = getNombresProductos();
    // Incluir la lógica de la vista
    $data = array();
    $data['title'] = "Tienda Online";
    $data['body'] = 'D:\xampp\htdocs\MVC\EJEMPLO\VISTA\vista.php';
    require('./VISTA/layout1/layout.php');
?>
