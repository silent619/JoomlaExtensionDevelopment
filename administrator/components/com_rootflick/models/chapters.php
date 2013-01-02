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

class RootflickModelChapters extends JModelList
{
	public function getListQuery()
	{
		$query = parent::getListQuery();
		
		$query->select('i.id as chapter_id, i.name as chapter_name, a.id as story_id, a.name as story_name');
		$query->from('#__rootflick_chapters as i');
		$query->join('LEFT', '#__rootflick_stories AS a ON (i.story_id = a.id)');
		//$query->where('i.id=10');
		
		return $query;
	}
	
	public function getItems()
	{
		$items = parent::getItems();
				
		foreach ($items as &$item)
		{
			$item->url = 'index.php?option=com_rootflick&amp;task=chapter.edit&amp;id=' . $item->chapter_id;
		}
		
		return $items;
	}
	
	public function getTable($type='Chapters', $prefix='RootflickTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
}
