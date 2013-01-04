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


class RootflickViewChapter extends JViewLegacy
{
	protected $item;
	protected $submits;
	protected $winner;
	
	// Overwriting JView display method
	function display($tpl = null) 
	{
		$this->item		=	$this->get('Item');
		$this->submits	=	$this->get('Submits');
		$this->winner	=	$this->get('Winner');
				
		parent::display($tpl);
	}
}
