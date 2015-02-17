<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>
<div class="registration<?php echo $this->pageclass_sfx?>">

		<div class="page-header">
			<h2><?php echo $this->escape($this->params->get('page_heading')); ?></h2>
		</div>

		<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
			<?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
				<?php $fields = $this->form->getFieldset($fieldset->name);?>
				<?php if (count($fields)):?>
					<?php foreach ($fields as $field) :// Iterate through the fields in the set and display them.?>

							<div class="form-group">
								<label for="" class="col-sm-2 control-label"><?php echo $field->label; ?></label>

								<div class="col-sm-10">
									<?php echo $field->input;?>
								</div>
							</div>
					<?php endforeach;?>
				<?php endif; ?>
			<?php endforeach;?>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JREGISTER');?></button>
					<a class="btn btn-default" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
					<input type="hidden" name="option" value="com_users" />
					<input type="hidden" name="task" value="registration.register" />
				</div>
			</div>
			<?php echo JHtml::_('form.token');?>
		</form>
</div>
