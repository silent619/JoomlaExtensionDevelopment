<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.model');

class RootflickModelStory extends JModelLegacy
{
	public function getItem()
	{
		$id = JFactory::getApplication()->input->getInt('id', 1);
		
		$row = JTable::getInstance('story', 'RootflickTable');
		return $row;
	}
	
	public function getChapters()
	{
		$story_id = JFactory::getApplication()->input->get('id');
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		
		$query->select('*');
		$query->from('#__rootflick_chapters');
		//$query->where('story_id='.$story_id);
		$db->setQuery($query);
		
		$results = $db->loadObject();
		
		return $results;
	}
}
