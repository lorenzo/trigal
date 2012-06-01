<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Profesione');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($profesione['Profesione']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Nombre'); ?></dt>
			<dd>
				<?php echo h($profesione['Profesione']['nombre']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Profesione')), array('action' => 'edit', $profesione['Profesione']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Profesione')), array('action' => 'delete', $profesione['Profesione']['id']), null, __('Are you sure you want to delete # %s?', $profesione['Profesione']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profesiones')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profesione')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
<div>

