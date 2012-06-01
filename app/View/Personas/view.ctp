<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Persona');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Nombre Completo'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['nombre_completo']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Nacionalidad'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['nacionalidad']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Cedula'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['cedula']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Fecha Nacimiento'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['fecha_nacimiento']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Sexo'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['sexo']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Profesion'); ?></dt>
			<dd>
				<?php echo h($item['Profesion']['nombre']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Elector'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['elector']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Calle'); ?></dt>
			<dd>
				<?php echo h($item['Calle']['nombre']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Casa Edificio'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['casa_edificio']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Casa Numero'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['casa_numero']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Telefono'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['telefono']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Celular'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['celular']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Correo'); ?></dt>
			<dd>
				<?php echo h($item['Persona']['correo']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Persona')), array('action' => 'edit', $item['Persona']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Persona')), array('action' => 'delete', $item['Persona']['id']), null, __('Are you sure you want to delete # %s?', $item['Persona']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Personas')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Persona')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
<div>

