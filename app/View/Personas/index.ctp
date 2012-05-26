<?php $this->set('title_for_layout', 'Listado de Personas'); ?>

<div class="row-fluid">
	<div class="span9">
		<p>
			<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, mostrando {:current} personas de {:count} en total, empezando en {:start}, terminando en {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->Paginator->sort('cedula');?></th>
				<th><?php echo $this->Paginator->sort('nombre_completo', 'Nombre');?></th>
				<th><?php echo $this->Paginator->sort('fecha_nacimiento');?></th>
				<th><?php echo $this->Paginator->sort('sexo');?></th>
				<th><?php echo $this->Paginator->sort('elector');?></th>
				<th><?php echo $this->Paginator->sort('calle');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($items as $persona): ?>
			<tr>
				<td><?php echo h($persona['Persona']['cedula']); ?>&nbsp;</td>
				<td><?php echo h($persona['Persona']['nombre_completo']); ?>&nbsp;</td>
				<td><?php echo h($persona['Persona']['fecha_nacimiento']); ?>&nbsp;</td>
				<td><?php echo h($persona['Persona']['sexo']); ?>&nbsp;</td>
				<td><?php echo h($persona['Persona']['elector']); ?>&nbsp;</td>
				<td><?php echo h($persona['Persona']['calle']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $persona['Persona']['id'])); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $persona['Persona']['id'])); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $persona['Persona']['id']), null, __('Are you sure you want to delete # %s?', $persona['Persona']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->Paginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Persona')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>