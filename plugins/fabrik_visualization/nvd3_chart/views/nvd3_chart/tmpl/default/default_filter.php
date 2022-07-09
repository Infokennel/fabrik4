<?php
/**
 * Fabrik nvd3_chart Chart Default Tmpl: filter
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.visualization.nvd3_chart
 * @copyright   Copyright (C) 2005-2020  Media A-Team, Inc. - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Language\Text;

if ($this->showFilters) :
?>
<form method="post" name="filter">
<?php
	foreach ($this->filters as $table => $filters) :
		if (!empty($filters)) :
		?>
	  <table class="filtertable fabrikList"><tbody>
	  <tr>
		<th style="text-align:left"><?php echo Text::_('SEARCH'); ?>:</th>
		<th style="text-align:right"><a href="#" class="clearFilters"><?php echo Text::_('CLEAR'); ?></a></th>
	</tr>
	  <?php
			$c = 0;
			foreach ($filters as $filter) :
		 	?>
	    <tr class="fabrik_row oddRow<?php echo ($c % 2); ?>">
	    	<td><?php echo $filter->label ?> </td>
	    	<td><?php echo $filter->element ?></td>
	  <?php
				$c++;
			endforeach;
			?>
	  </tbody>
	<thead>
		<tr>
			<th colspan='2'>
	  			<?php echo Text::_($table) ?>
	  		</th>
	  	</tr>
	  </thead>
	<tfoot>
		<tr><th colspan='2' style="text-align:right;">
	  <input type="submit" class="button" value="<?php echo Text::_('GO') ?>" />
	  </th></tr></tfoot></table>
	  <?php
		endif;
	endforeach;
	?>

</form>
<?php
endif;
