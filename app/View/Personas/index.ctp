<?php
	$this->set('title_for_layout', 'Listado de Personas');
	$electores = array(
		1 => 'Si',
		4 => 'No',
		3 => 'Itinerante',
		2 => 'Menor',
		5 => '',
		6 => 'Desconocido'
	);
?>

<div class="row-fluid">
	<div class="span9">
		<p>
			<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, mostrando {:current} personas de {:count} en total, empezando en {:start}, terminando en {:end}')));?>
		</p>

		<table class="table">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('cedula');?></th>
					<th><?php echo $this->Paginator->sort('nombre_completo', 'Nombre');?></th>
					<th><?php echo $this->Paginator->sort('fecha_nacimiento');?></th>
					<th><?php echo $this->Paginator->sort('sexo');?></th>
					<th><?php echo $this->Paginator->sort('elector');?></th>
					<th><?php echo $this->Paginator->sort('calle');?></th>
					<th class="actions"><?php echo __('Acciones');?></th>
				</tr>
			</thead>
		<?php foreach ($items as $persona): ?>
			<tbody>
				<tr>
					<td><?php echo h($persona['Persona']['cedula']); ?>&nbsp;</td>
					<td><?php echo h($persona['Persona']['nombre_completo']); ?>&nbsp;</td>
					<td><?php echo h($persona['Persona']['fecha_nacimiento']); ?>&nbsp;</td>
					<td><?php echo h($persona['Persona']['sexo']); ?>&nbsp;</td>
					<td><?php echo $electores[$persona['Persona']['elector']]; ?>&nbsp;</td>
					<td><?php echo h($persona['Calle']['nombre']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Detalles'), array('action' => 'edit', $persona['Persona']['id'])); ?>
						<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $persona['Persona']['id']), null, __('Esta seguro de eliminar a %s?', $persona['Persona']['nombre_completo'])); ?>
					</td>
				</tr>
		</tbody>
		<?php endforeach; ?>
		</table>

		<?php echo $this->Paginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Agregar %s', __('Persona')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>
