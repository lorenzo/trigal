<div class="row-fluid">
	<div class="span9">
		<?php echo $this->Form->create('Profesion', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Profesione')); ?></legend>
				<?php
				echo $this->Form->input('nombre', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->Form->hidden('id');
				?>
				<?php echo $this->Form->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->Form->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Profesione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Profesione.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Profesiones')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>