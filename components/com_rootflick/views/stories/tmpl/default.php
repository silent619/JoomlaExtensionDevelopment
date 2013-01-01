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
<h3>Root Flick Stories View Working!</h3>

<ul>
	<?php foreach($this->items as $item): ?>
		<li><?php echo $item->name; ?></li>
	<?php endforeach; ?>
</ul>