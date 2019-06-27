<h1>Gestionar categorías</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">Crear categoría</a>

<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
	</tr>
	<?php while($cat = $categoria->fetch_object()): ?>
		<tr>
			<td><?= $cat->id;?></td>
			<td><?= $cat->nombre;?></td>
		</tr>
	<?php endwhile; ?>
</table>