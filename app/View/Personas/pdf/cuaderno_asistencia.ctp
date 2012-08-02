<?php
	$i = 1;
	$iterator = new ArrayIterator($items);
?>

<div class="row-fluid">
	<div class="span12">
		<?php foreach (range(0, count($items), 15) as $offset) :?>
			<table class="table cuaderno">
				<thead>
					<tr>
						<th>Número</th>
						<th>Nombre</th>
						<th>Cédula</th>
						<th>Calle</th>
						<th>Asistió</th>
					</tr>
				</thead>
			<?php foreach (new LimitIterator($iterator, $offset, 15) as $persona): ?>
				<tbody>
					<tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo h($persona['Persona']['nombre_completo']); ?>&nbsp;</td>
						<td><?php echo $persona['Persona']['nacionalidad'] . '-' . h($persona['Persona']['cedula']); ?>&nbsp;</td>
						<td><?php echo h($persona['Calle']['nombre']); ?>&nbsp;</td>
						<td class="sello"></td>
					</tr>
			</tbody>
			<?php endforeach; ?>
			</table>
			<br>
		<?php endforeach; ?>
	</div>
</div>