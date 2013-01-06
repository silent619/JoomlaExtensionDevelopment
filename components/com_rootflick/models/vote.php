<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.modellist');

class RootflickModelVote extends JModelList
{
	
	public function vote($user_id, $submission_id, $level)
	{
		
		$item = $this->getTable('Vote', 'RootflickTable');
		
		$item->user_id		=	$user_id;
		$item->sub_id		=	$submission_id;
		$item->vote_type	=	$level;
		$item->vote			=	1;
		$item->store();
	}
	
	public function checkVotes($user_id, $submission_id)
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		
		$query->select('id, user_id, sub_id');
		$query->from('#__rootflick_vote');
		$query->where('user_id='.$user_id);
		$query->where('sub_id='.$submission_id);
		$db->setQuery($query);
		$vote = $db->loadObject();
		return $vote;
	} 	
}