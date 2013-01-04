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
	
	// Overwriting JView display method
	function display($tpl = null) 
	{
		$this->item = $this->get('Item');
		$this->form = $this->get('Form');
		parent::display($tpl);
	}
}
