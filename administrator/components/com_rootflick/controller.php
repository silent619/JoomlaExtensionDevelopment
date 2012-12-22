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
		$layout = $this->input->get('layout', 'edit');
		$id     = $this->input->getInt('id');
	
		// Check for edit form.
		if ($view == 'story' && $layout == 'edit' && !$this->checkEditId('com_rootflick.edit.story', $id)) {
				// Somehow the person just went to the form - we don't allow that.
				$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
				$this->setMessage($this->getError(), 'error');
				$this->setRedirect(JRoute::_('index.php?option=com_rootflick&view=story', false));
	
				return false;
		}
		
		parent::display();
		
		return $this;
	}
}
