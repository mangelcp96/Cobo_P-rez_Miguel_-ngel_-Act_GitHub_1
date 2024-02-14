<h1>Listado de Productos</h1>
<table>
    <tr>
        <th>Nombre</th>
    </tr>
    <?php foreach ($articulos as $articulo): ?>
        <tr>
            <td>
                <?php echo $articulo['NOMBRE'] ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>