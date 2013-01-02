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
class RootflickViewChapter extends JViewLegacy
{

	protected $item; 
	protected $form;
	
	// Overwriting JView display method
	function display($tpl = null) 
	{	
		$this->item = $this->get('Item');
		$this->form = $this->get('Form');
		
		$this->addToolbar();
		
		parent::display($tpl);
		
	}
	
	protected function addToolbar()
	{
		if ($this->item->id) {
			JToolbarHelper::title(JText::_('COM_ROOTFLICK_ITEM_EDIT'));
		} 
		else {
			JToolbarHelper::title(JText::_('COM_ROOTFLICK_ITEM_NEW'));
		}
		
		JToolbarHelper::apply('chapter.apply');
		JToolbarHelper::save('chapter.save');
		JToolbarHelper::save2new('chapter.save2new');
		JToolbarHelper::cancel('chapter.cancel');

	}
	
}
