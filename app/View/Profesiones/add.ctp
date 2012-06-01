<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Profesione', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Profesione')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('nombre', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Profesiones')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>