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

<h2><?php echo $this->winner->name; ?></h2>
<div class="well well-small">
	<?php echo $this->winner->video; ?>
</div>
<div class="well well-small">
	<?php echo $this->winner->description; ?>
	<p>Submitted by: <strong><?php echo $this->winner->username; ?></strong></p>
</div>
<div class="clearfix"></div>