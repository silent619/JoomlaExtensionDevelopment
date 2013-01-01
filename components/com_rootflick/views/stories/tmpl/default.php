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
		<li><a href="<?php echo $item->url; ?>"><?php echo $item->name; ?></a></li>
	<?php endforeach; ?>
</ul>