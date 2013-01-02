<?php
/**
 
 * @package		Joomla25.Bizform
 * @subpackage	Components
 * @author		Chad Windnagle
 * @link		http://www.chadwindnagle.com
 * @license		License GNU General Public License version 2 or later
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');

?>
<form action="<?php echo JRoute::_('index.php?option=com_rootflick&view=chapter'); ?>" method="post" name="adminForm" id="adminForm">
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span8">
		<div id="filter-bar" class="btn-toolbar">
			
		</div>
		<table class="table table-striped" id="storiesList">
			<thead>
				<tr>
					<th width="1%" class="nowrap center">
						<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
					</th>
					<th width="10%"><?php echo JText::_('COM_ROOTFLICK_ChAPTER_NAME'); ?></th>
					<th width="10%"><?php echo JText::_('COM_ROOTFLICK_STORY_NAME'); ?></th>
					<th width="10%"><?php echo JText::_('COM_ROOTFLICK_LIST_ID'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($this->items as $i => $item) : ?>
					<tr class="row<?php echo $i % 2; ?>">
						<td class="center hidden-phone">
							<?php echo JHtml::_('grid.id', $i, $item->chapter_id); ?>
						</td>
						<td>
							<a href="<?php echo $item->url;?>">
								<?php echo $this->escape($item->chapter_name); ?>
							</a>
						</td>
						<td>
							<?php echo $item->story_name; ?>
						</td>
						<td>
							<?php echo $item->chapter_id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
</form>