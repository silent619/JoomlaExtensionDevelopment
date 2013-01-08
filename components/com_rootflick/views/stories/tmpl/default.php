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

?>
<h3>Current Stories</h3>


<h3>Completed Stories</h3>

<?php foreach($this->items as $item): ?>
			<?php $url = 'index.php?option=com_rootflick&view=story&id='. $item->id; ?>
	<div class="well well-small span5">
		<h3><a href="<?php echo $url; ?>"><?php echo $item->name; ?></a></h3>
		<?php echo $item->description; ?>
		<hr />
		<i class="icon icon-calendar"></i><?php echo JText::_('COM_ROOTFLICK_STORIES_START_DATE'); ?> <?php echo $item->publish_up; ?>
		<br />
		<i class="icon icon-calendar"></i><?php echo JText::_('COM_ROOTFLICK_STORIES_END_DATE'); ?> <?php echo $item->publish_down; ?>
	</div>
<?php endforeach; ?>
<div class="clearfix"></div>