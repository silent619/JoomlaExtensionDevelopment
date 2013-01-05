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

$story_id = JFactory::getApplication()->input->getInt('sid');

?>
<h2><?php echo $this->item->name;?></h2>
<p><?php echo $this->item->description; ?></p>

<?php if ($this->winner): ?>
	<div class="alert alert-success">
		This chapter has had a winner! Voting has ended.
	</div>
	<?php echo $this->loadTemplate('winner'); ?>
<?php else: ?>
	<div class="alert alert-info">
		This chapter has not yet had a winner. Vote now!
	</div>
<?php endif; ?>
<h3>Other Submissions</h3>
<?php echo $this->loadTemplate('submissions'); ?>

<a href="index.php?option=com_rootflick&view=submit&layout=edit&cid=<?php echo $this->item->id; ?>">Submit Video For This Chapter</a>
<br />
<a href="index.php?option=com_rootflick&view=story&id=<?php echo $story_id;?>">Back to story...</a>