<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.modellist');

class RootflickModelStories extends JModelList
{
	
	public function getListQuery()
	{
		$query = parent::getListQuery();

		$query->select('*');
		$query->from('#__rootflick_stories');
		
		

		return $query;
	}
	
}
