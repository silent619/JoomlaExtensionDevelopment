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


class RootflickViewSubmit extends JViewLegacy
{
	protected $item;
	protected $form;
	public $chapter_id;
	
	
	// Overwriting JView display method
	function display($tpl = null) 
	{
		echo "view is working";
		$this->item = $this->get('Item');
		$this->form = $this->get('Form');
		$this->chapter_id = JFactory::getApplication()->input->getInt('cid', 1);
		
		parent::display($tpl);
	}
}
