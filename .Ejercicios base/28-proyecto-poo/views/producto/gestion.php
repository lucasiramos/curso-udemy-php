<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">Crear producto</a>

<?php 
	if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed'){
		echo '<br/><strong class="alert_red">Error en la carga</strong>';
	}elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == 'completed'){
		echo '<br/><strong class="alert_green">El producto se ha añadido correctamente</strong>';
	}
	Utils::deleteSession('producto');

	if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed'){
		echo '<br/><strong class="alert_red">Error en el borrado</strong>';
	}elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == 'completed'){
		echo '<br/><strong class="alert_green">El producto se ha borrado correctamente</strong>';
	}
	Utils::deleteSession('producto');
?>

<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Stock</th>
		<th>Acciones</th>
	</tr>
	<?php while($prod = $productos->fetch_object()): ?>
		<tr>
			<td><?= $prod->id;?></td>
			<td><?= $prod->nombre;?></td>
			<td><?= $prod->precio;?></td>
			<td><?= $prod->stock;?></td>
			<td>
				<a href="<?=base_url?>producto/editar&id=<?= $prod->id?>" class="button button-gestion">Editar</a>
				<a href="<?=base_url?>producto/eliminar&id=<?= $prod->id?>" class="button button-gestion button-red">Borrar</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>