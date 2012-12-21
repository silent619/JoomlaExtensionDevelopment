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

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HTML View class for the HelloWorld Component
 */
class RootflickViewRootflick extends JViewLegacy
{
	// Overwriting JView display method
	function display($tpl = null) 
	{	
		$this->addToolbar();
		parent::display($tpl);
	}
	
	protected function addToolbar()
	{
		JToolbarHelper::title(JText::_('COM_ROOTFLICK_CP_TITLE'), 'article.png');
	}
	
}
