<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.model');

class RootflickModelChapter extends JModelLegacy
{
	public function getItem()
	{
		$id = JFactory::getApplication()->input->getInt('cid');
		
		$row = JTable::getInstance('chapter', 'RootflickTable');
		
		$row->load($id);
		
		return $row;
	}
	
	public function getSubmits()
	{
		$cid = JFactory::getApplication()->input->getInt('cid');
		
		$db = $this->getDbo();
		$query = $db->getQuery(true);	
		
		$query->select('a.*, i.username');
		$query->select('(SELECT SUM(v.vote) FROM #__rootflick_vote AS v WHERE v.sub_id = a.id) AS vote');
		//$query->select('(SELECT SUM(v.vote) FROM #__rootflick_vote AS v WHERE v.sub_id = a.id AND v.vote_type=registered) AS registered_vote');
		$query->from('#__rootflick_submissions as a');
		$query->leftJoin('#__users as i ON (a.user_id = i.id)');
		$query->where('chapter_id='.$cid . ' and winner = 0');
 
		return $db->setQuery($query)->loadObjectList();
	}
	
	public function getWinner()
	{
		$cid = JFactory::getApplication()->input->getInt('cid');
		
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		
		$query->select('a.*, i.username, i.id as uid');
		$query->from('#__rootflick_submissions as a');
		$query->join('LEFT', '#__users AS i ON (a.user_id = i.id)');
		$query->where('chapter_id='.$cid . ' and winner = 1');
		$db->setQuery($query);
		
		$winner = $db->loadObject();
		return $winner;
	}
}
