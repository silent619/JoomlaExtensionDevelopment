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
<form action="<?php echo JRoute::_('index.php?option=com_rootflick'); ?>" method="post" name="adminForm" id="adminForm">
	<div id="j-sidebar-container" class="span3">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span9">
		<div class="span3">
			<div class="well well-small">
				<div class="module-title nav-header"><?php echo JText::_('COM_ROOTFLICK_CP_HEADING_STORIES')?></div>
				<p><a href="index.php?option=com_rootflick&view=stories"><?php echo JText::_('COM_ROOTFLICK_CP_LABEL_MANAGE_STORIES'); ?></a></p>
			</div>
		</div>
		<div class="span3">
			<div class="well well-small">
				<div class="module-title nav-header"><?php echo JText::_('COM_ROOTFLICK_CP_HEADING_CHAPTERS')?></div>
				<p><a href="index.php?option=com_rootflick&view=chapters"><?php echo JText::_('COM_ROOTFLICK_CP_LABEL_MANAGE_CHAPTERS')?></a></p>
			</div>
		</div>
		<div class="span3">
			<div class="well well-small">
				<div class="module-title nav-header"><?php echo JText::_('COM_ROOTFLICK_CP_HEADING_SUBMISSIONS')?></div>
				<p><a href="index.php?option=com_rootflick&view=submits"><?php echo JText::_('COM_ROOTFLICK_CP_LABEL_MANAGE_SUBMISSIONS')?></a></p>
			</div>
		</div>
	</div>
	
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
</form>