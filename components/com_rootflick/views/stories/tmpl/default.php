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

<table>
	<thead>
		<th><?php echo JText::_('COM_ROOTFLICK_TITLE'); ?></th>
		<th><?php echo JText::_('COM_ROOTFLICK_START_DATE'); ?></th>
		<th><?php echo JText::_('COM_ROOTFLICK_END_DATE'); ?></th>
		<th><?php echo JText::_('COM_ROOTFLICK_WINNER'); ?></th>
	</thead>
	<tbody>
		<?php foreach($this->items as $item): ?>
			<?php $url = 'index.php?option=com_rootflick&view=story&id='. $item->id; ?>
			<tr>
				<td><a href="<?php echo $url;?>"><?php echo $item->name; ?></a> </td>
				<td><?php echo $item->publish_up; ?></td>
				<td><?php echo $item->publish_down; ?></td>
				<td><?php echo "Winner Name"; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>