
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fshion - Estampados para camisetas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Fshion - Elige tu estampado</h1>
    <div class="contenedor-estampados">
        <?php foreach ($estampados as $estampado): ?>
            <div class="estampado">
                <img src="<?php echo $estampado['imagen']; ?>" alt="<?php echo $estampado['titulo']; ?>">
                <h3><?php echo $estampado['titulo']; ?></h3>
                <p><?php echo $estampado['descripcion']; ?></p>
                <a href="detalle.php?id=<?php echo $estampado['id']; ?>">Ver detalle</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>