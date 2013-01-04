<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.model');

class RootflickModelStory extends JModelLegacy
{
	public function getItem()
	{
		$id = JFactory::getApplication()->input->get('id');
		
		$row = JTable::getInstance('story', 'RootflickTable');
		
		$row->load($id);
		
		return $row;
	}
	
	public function getChapters()
	{
		$story_id = JFactory::getApplication()->input->get('id');
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		
		$query->select('*');
		$query->from('#__rootflick_chapters');
		$query->where('story_id='.$story_id);
		$db->setQuery($query);
		
		$chapters = $db->loadObjectList();
		
		foreach ($chapters as $chapter) 
		{
			$chapter->url = 'index.php?option=com_rootflick&view=chapter&cid=' . $chapter->id . '&sid='.$story_id;
		}
		
		return $chapters;
	}
}
