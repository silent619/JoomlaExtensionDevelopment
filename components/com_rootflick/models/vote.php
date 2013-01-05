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
}