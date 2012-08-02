<div class="row-fluid">
	<div class="span9">
		<p>
			<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, mostrando {:current} calles de {:count} en total, empezando en {:start}, terminando en {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->Paginator->sort('nombre');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($items as $calle): ?>
			<tr>
				<td><?php echo h($calle['Calle']['nombre']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $calle['Calle']['id'])); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $calle['Calle']['id']), null, __('Esta seguro de eliminar %s?', $calle['Calle']['nombre'])); ?>
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
			<li><?php echo $this->Html->link(__('Agregar %s', __('Calle')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>