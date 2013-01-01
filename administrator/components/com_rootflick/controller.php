<?php
/**
 
 * @package		Joomla25.Bizform
 * @subpackage	Components
 * @author		Chad Windnagle
 * @link		http://www.chadwindnagle.com
 * @license		License GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

/**
 * Base controller class for RootFlick.
 *
 * @package		Joomla.Site.Admin
 * @subpackage	com_rootflick
 * @since		1.5
 */
 
 // add the stylesheet
 
 
$doc = JFactory::getDocument();

 
class RootflickController extends JControllerLegacy
{
	public function display($cachable = false, $urlparams = false)
	{
		$view   = $this->input->get('view', 'story');
		$layout = $this->input->get('layout', 'default');
		$id     = $this->input->getInt('id');
		
		parent::display();
		
		return $this;
	}
}
