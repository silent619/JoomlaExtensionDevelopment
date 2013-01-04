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

jimport('joomla.application.controllerform');
 
class RootflickControllerSubmit extends JControllerForm
{
	protected $view_list = 'stories';
	
	protected function allowAdd($data = array())
	{
		$user		= JFactory::getUser();
		$categoryId	= JArrayHelper::getValue($data, 'catid', $this->input->getInt('catid'), 'int');
		$allow		= true;
	
		return $allow;
		
	}
}
