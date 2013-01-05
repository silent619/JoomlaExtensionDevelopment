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
	<div id="j-sidebar-container" class="span2">
		<h3>My sidebar</h3>
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span8">
		<h3>Manage Rootflick</h3>
		<div class="span3">
			<div class="well well-small">
				<div class="module-title nav-header">Stories</div>
				<p><a href="index.php?option=com_rootflick&view=stories">Manage Stories</a></p>
			</div>
		</div>
		<div class="span3">
			<div class="well well-small">
				<div class="module-title nav-header">Chapters</div>
				<p><a href="index.php?option=com_rootflick&view=chapters">Manage Chapters</a></p>
			</div>
		</div>
		<div class="span3">
			<div class="well well-small">
				<div class="module-title nav-header">Submissions</div>
				<p><a href="index.php?option=com_rootflick&view=submits">Manage Submissions</a></p>
			</div>
		</div>
	</div>
	
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
</form>