<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Profesions'));?></h2>

		<p>
			<p>
			<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, mostrando {:current} personas de {:count} en total, empezando en {:start}, terminando en {:end}')));?>
		</p>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('nombre');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($items as $Profesion): ?>
			<tr>
				<td><?php echo h($Profesion['Profesion']['id']); ?>&nbsp;</td>
				<td><?php echo h($Profesion['Profesion']['nombre']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $Profesion['Profesion']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $Profesion['Profesion']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $Profesion['Profesion']['id']), null, __('Are you sure you want to delete # %s?', $Profesion['Profesion']['id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Profesion')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>