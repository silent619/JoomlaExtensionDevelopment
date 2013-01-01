<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.model');

class RootflickModelStory extends JModelLegacy
{
	public function getItem()
	{
		$id = JFactory::getApplication()->input->getInt('id', 1);
		
		$row = JTable::getInstance('story', 'RootflickTable');
		$row->load($id);
		
		return $row;
	}
}
