<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_categories
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.model.admin');

class RootflickModelStory extends JModelAdmin
{
	public function getTable($type='Story', $prefix='RootflickTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
	public function getForm($data=array(), $loadData=true)
	{
		$form = $this->loadForm('com_rootflick.story', 'story', array('control'=>'jform', 'loadData'=>$loadData));
		return $form;
	}
}
