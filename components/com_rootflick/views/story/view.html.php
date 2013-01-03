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


class RootflickViewStory extends JViewLegacy
{
	protected $item;
	protected $chapters;
	
	// Overwriting JView display method
	function display($tpl = null) 
	{
		$this->item = $this->get('Item');
		$this->chapters = $this->get('Chapters');
		parent::display($tpl);
	}
}
