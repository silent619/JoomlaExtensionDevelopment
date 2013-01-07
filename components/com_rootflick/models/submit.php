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

class RootflickModelSubmit extends JModelAdmin
{
	public function getTable($type='Submit', $prefix='RootflickTable', $config = array())
	{
		$row = JTable::getInstance($type, $prefix, $config);
		return $row;
	}
	
	protected function loadFormData()
	{
		$data = JFactory::getApplication()->getUserState('com_rootflick.edit.submit.data', array());
		
		if (empty($data)) {
			$data = $this->getItem();
		}
		
		return $data;
	}

	
	public function getForm($data=array(), $loadData=true)
	{
		$form = $this->loadForm('com_rootflick.submit', 'submit', array('control'=>'jform', 'load_data'=>$loadData));
		return $form;
	}
	
	
}
