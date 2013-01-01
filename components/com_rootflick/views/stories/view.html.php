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


class RootflickViewStories extends JViewLegacy
{
	protected $items;
	
	// Overwriting JView display method
	function display($tpl = null) 
	{
		$this->items = $this->get('Items');
		parent::display($tpl);
	}
}
