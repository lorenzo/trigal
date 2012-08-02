<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Persona', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Persona')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('nombre_completo', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Require') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('nacionalidad');
				echo $this->BootstrapForm->input('cedula');
				echo $this->BootstrapForm->input('fecha_nacimiento');
				echo $this->BootstrapForm->input('sexo', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Require') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('profesion');
				echo $this->BootstrapForm->input('elector', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Require') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('Vivienda.calle_id');
				echo $this->BootstrapForm->input('Vivienda.tipo');
				echo $this->BootstrapForm->input('Vivienda.casa_nombre');
				echo $this->BootstrapForm->input('Vivienda.casa_numero');
				echo $this->BootstrapForm->input('Vivienda.edif_nombre');
				echo $this->BootstrapForm->input('Vivienda.edif_nro_apto', array('label' => 'Numero apartamento'));
				echo $this->BootstrapForm->input('Vivienda.telefono_hab', array('label' => 'Telefono Hab.'));
				echo $this->BootstrapForm->input('celular');
				echo $this->BootstrapForm->input('correo', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Require') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->hidden('id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Persona.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Persona.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Personas')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>