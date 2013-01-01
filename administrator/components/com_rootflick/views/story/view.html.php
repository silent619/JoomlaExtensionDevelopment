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
class RootflickViewStory extends JViewLegacy
{

	protected $item; 
	protected $form;
	
	// Overwriting JView display method
	function display($tpl = null) 
	{	
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');
		
		var_dump($this->item);
		//exit();
		
		$this->addToolbar();
		
		parent::display($tpl);
		
	}
	
	protected function addToolbar()
	{
		JToolbarHelper::title(JText::_('COM_ROOTFLICK_CP_TITLE'), 'article.png');
		//JToolbarHelper::apply('article.apply');
		JToolbarHelper::save('story.save');
		//JToolbarHelper::save2new('article.save2new');
		//JToolbarHelper::cancel('article.cancel');

	}
	
}
