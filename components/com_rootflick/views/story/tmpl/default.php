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
<h2><?php echo $this->item->name;?></h2>
<p>Use the timeline to select a chapter</p>
<?php echo $this->loadTemplate('chapters'); ?>

<a href="index.php?option=com_rootflick&view=stories">Back to stories...</a>