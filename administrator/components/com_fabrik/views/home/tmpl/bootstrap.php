<?php
/**
 * Admin Home Bootstrap Tmpl
 *
 * @package     Joomla.Administrator
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2020  Media A-Team, Inc. - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @since       3.0
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

JHTML::stylesheet('media/com_fabrik/css/admin.css');
JToolBarHelper::title(FText::_('COM_FABRIK_WELCOME'), 'fabrik.png');
?>

<div id="j-main-container">

	<div class="row-fluid">
		<div>
			<div style="float:left;width:250px;margin-top:30px;">
				<?php echo JHTML::image('media/com_fabrik/images/logo.png', 'Fabrik'); ?>
			</div>
		</div>
		<div class="col-md-12">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="">
					<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-about" type="button" role="tab" aria-controls="" aria-selected="true">
						<?php echo FText::_('COM_FABRIK_HOME_ABOUT'); ?>
					</button>
				</li>
				<li class="nav-item" role="">
					<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#home-tools" type="button" role="tab" aria-controls="" aria-selected="false">
						<?php echo FText::_('COM_FABRIK_HOME_TOOLS')?>
					</button>
				</li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="home-about">
					<?php echo FText::_('COM_FABRIK_HOME_ABOUT_TEXT'); ?>
				</div>

				<div class="tab-pane" id="home-tools">
					<ul class="adminlist">
						<li>
							<a onclick="return confirm('<?php echo FText::_('COM_FABRIK_HOME_CONFIRM_WIPE', true);?>')" href="index.php?option=com_fabrik&task=home.reset">
								<?php echo FText::_('COM_FABRIK_HOME_RESET_FABRIK') ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
