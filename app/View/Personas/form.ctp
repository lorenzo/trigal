<?php $this->set('title_for_layout', 'Registro'); ?>
<div class="row-fluid">
	<div class="span9">
		<?php echo $this->Form->create('Persona', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend>Datos Personales</legend>
				<?php
				echo $this->Form->input('nombre_completo', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Requerido') . '</span>&nbsp;')
				);
				echo $this->Form->input('nacionalidad', array(
					'class' => 'input-mini',
					'placeholder' => 'V / E'
				));
				echo $this->Form->input('cedula',  array(
					'class' => 'input-small'
				));
				echo $this->Form->input('fecha_nacimiento', array(
					'type' => 'text',
					'class' => 'input-small'
				));
				echo $this->Form->input('sexo', array(
					'options' => array('M' => 'Masculino', 'F' => 'Femenino'),
					'type' => 'radio'
				));
				echo $this->Form->input('profesion_id');
				echo $this->Form->input('elector', array(
					'required' => 'required',
					'options' => array(
						1 => 'Si',
						4 => 'No',
						3 => 'Itinerante',
						2 => 'Menor'
					)
				));
				echo $this->Form->input('fallecido');
		?>
			<fieldset>
				<legend>Dirección</legend>
			<?php
					echo $this->Form->input('Vivienda.calle_id');
					echo $this->Form->input('Vivienda.tipo', array('options' => array('Casa', 'Edificio')));
					echo $this->Form->input('Vivienda.casa_nombre');
					echo $this->Form->input('Vivienda.casa_numero');
					echo $this->Form->input('Vivienda.edif_nombre');
					echo $this->Form->input('Vivienda.edif_nro_apto', array('label' => 'Numero apartamento'));
					echo $this->Form->input('Vivienda.telefono_hab', array('label' => 'Telefono Hab.', 'type' => 'text'));
					echo $this->Form->input('celular');
					echo $this->Form->input('correo');
					echo $this->Form->input('id', array('type' => 'hidden', 'div' => false));
					?>
					<?php echo $this->Form->submit(__('Submit'));?>
			</fieldset>
		</fieldset>
		<?php echo $this->Form->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Listado de Personas'), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>