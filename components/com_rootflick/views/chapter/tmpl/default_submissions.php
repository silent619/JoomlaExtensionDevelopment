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
	<pre><?php print_r($submit); ?></pre>
<?php endforeach; ?>