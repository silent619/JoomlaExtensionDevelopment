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

<?php foreach ($this->submits as $submit): ?>
	<div class="span3">
		<div class="well well-small">
			<h5><?php echo $submit->name; ?></h5>
		</div>
	</div>
<?php endforeach; ?>
<div class="clearfix"></div>