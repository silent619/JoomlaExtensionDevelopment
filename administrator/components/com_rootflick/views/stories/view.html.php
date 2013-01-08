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
class RootflickViewStories extends JViewLegacy
{
	protected $items;
	
	// Overwriting JView display method
	function display($tpl = null) 
	{	
		
		RootflickHelper::addSubmenu('stories');
		$this->items = $this->get('Items');
		$this->addToolbar();
		$this->sidebar = JHtmlSidebar::render();
		parent::display($tpl);
	}
	
	protected function addToolbar()
	{	
		JToolbarHelper::title(JText::_('COM_ROOTFLICK_STORIES_TITLE'), 'article.png');
		JToolbarHelper::addNew('story.add');
		
		JHtmlSidebar::setAction('index.php?option=com_rootflick&view=stories');
		//JHtmlSidebar::setAction('index.php?option=com_rootflick&view=stories');
	}
	
}
