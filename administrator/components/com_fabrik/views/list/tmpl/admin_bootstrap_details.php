<?php
/**
 * Admin List Tmpl
 *
 * @package     Joomla.Administrator
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2020  Media A-Team, Inc. - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @since       3.0
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<div class="tab-pane active" id="detailsX">

	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item" role="">
		<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#details-publishing" type="button" role="tab" aria-controls="" aria-selected="true">
			<?php echo FText::_('COM_FABRIK_TEXT'); ?>
		</button>
	  </li>
	  <li class="nav-item" role="">
		<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#details-filters" type="button" role="tab" aria-controls="" aria-selected="false">
			<?php echo FText::_('COM_FABRIK_FILTERS')?>
		</button>
	  </li>
	  <li class="nav-item" role="">
		<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#details-nav" type="button" role="tab" aria-controls="" aria-selected="false">
			<?php echo FText::_('COM_FABRIK_NAVIGATION')?>
		</button>
	  </li>
	  <li class="nav-item" role="">
		<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#details-layout" type="button" role="tab" aria-controls="" aria-selected="false">
			<?php echo FText::_('COM_FABRIK_LAYOUT')?>
		</button>
	  </li>
	  <li class="nav-item" role="">
		<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#details-link" type="button" role="tab" aria-controls="" aria-selected="false">
			<?php echo FText::_('COM_FABRIK_LINKS')?>
		</button>
	  </li>
	  <li class="nav-item" role="">
		<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#details-notes" type="button" role="tab" aria-controls="" aria-selected="false">
			<?php echo FText::_('COM_FABRIK_NOTES')?>
		</button>
	  </li>
	  <li class="nav-item" role="">
		<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#details-advanced" type="button" role="tab" aria-controls="" aria-selected="false">
			<?php echo FText::_('COM_FABRIK_ADVANCED')?>
		</button>
	  </li>
	</ul>

	<div class="tab-content">

		<div class="tab-pane" id="details-filters">
		    <fieldset class="form-horizontal">
				<?php
				foreach ($this->form->getFieldset('main_filter') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
				foreach ($this->form->getFieldset('filters') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
				?>
			</fieldset>
		</div>

		<div class="tab-pane active" id="details-publishing">
			<fieldset class="form-horizontal">
				<?php foreach ($this->form->getFieldset('main') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
				?>
				<?php foreach ($this->form->getFieldset('details2') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
				?>
			</fieldset>
		</div>

		<div class="tab-pane" id="details-nav">
			 <fieldset class="form-horizontal">
				<?php
				foreach ($this->form->getFieldset('main_nav') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
				foreach ($this->form->getFieldset('navigation') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
				?>
			</fieldset>
		</div>

		<div class="tab-pane" id="details-layout">
			 <fieldset class="form-horizontal">
				<?php

				?>
			</fieldset>

			<fieldset class="form-horizontal">
				<div class="row-fluid">
					<div class="span6">
						<legend><?php echo FText::_('COM_FABRIK_TEMPLATES')?></legend>
						<?php
						foreach ($this->form->getFieldset('main_template') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
				foreach ($this->form->getFieldset('layout') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
						?>
					</div>
					<div class="span6">
						<legend><?php echo FText::_('COM_FABRIK_PDF')?></legend>
						<?php
						foreach ($this->form->getFieldset('pdf') as $this->field) :
							echo $this->loadTemplate('control_group');
						endforeach;
						?>
					</div>
				</div>
			</fieldset>

			<fieldset class="form-horizontal">
				<div class="row-fluid">
					<div class="span6">
						<legend><?php echo FText::_('COM_FABRIK_BOOTSTRAP_LIST_OPTIONS')?></legend>
						<?php
						foreach ($this->form->getFieldset('layout-bootstrap') as $this->field) :
							echo $this->loadTemplate('control_group');
						endforeach;
						?>
					</div>
					<div class="span6">
						<legend><?php echo FText::_('COM_FABRIK_TABS')?></legend>
						<?php
						foreach ($this->form->getFieldset('tabs') as $this->field) :
							echo $this->loadTemplate('control_group');
						endforeach;
						?>
					</div>
				</div>
			</fieldset>
		</div>

		<div class="tab-pane" id="details-link">
			<div class="row-fluid">
				<div class="span8">
					<fieldset class="form-horizontal">
						<?php foreach ($this->form->getFieldset('links') as $this->field) :
							echo $this->loadTemplate('control_group');
						endforeach;
						?>
					</fieldset>
				</div>
				<div class="span4">
					<fieldset class="form-horizontal">
						<?php foreach ($this->form->getFieldset('links2') as $this->field) :
							echo $this->loadTemplate('control_group');
						endforeach;
						?>
					</fieldset>
				</div>
			</div>

		</div>

		<div class="tab-pane" id="details-notes">
			<fieldset class="form-horizontal">
				<?php foreach ($this->form->getFieldset('notes') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
				?>
			</fieldset>
		</div>

		<div class="tab-pane" id="details-advanced">
			<fieldset class="form-horizontal">
				<?php foreach ($this->form->getFieldset('advanced') as $this->field) :
					echo $this->loadTemplate('control_group');
				endforeach;
				?>
			</fieldset>
		</div>
	</div>
</div>