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

class RootflickModelSubmits extends JModelList
{
	public function getListQuery()
	{
		$query = parent::getListQuery();
	
		$query->select('a.*, i.name as chapter_name, i.story_id, e.name as story_name, f.username as username');
		$query->select('(SELECT SUM(v.vote) FROM #__rootflick_vote AS v WHERE v.sub_id = a.id) AS vote');
		$query->from('#__rootflick_submissions as a');
		$query->join('LEFT', '#__rootflick_chapters as i ON (a.chapter_id = i.id)');
		$query->join('LEFT', '#__rootflick_stories as e ON (i.story_id = e.id)');
		$query->join('LEFT', '#__users as f ON (a.user_id = f.id)');
		
		
		return $query;
	}
	
	public function getItems()
	{
		$items = parent::getItems();
		
		return $items;
	}
	
	public function getTable($type='Submit', $prefix='RootflickTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
}
