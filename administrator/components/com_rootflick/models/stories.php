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

class RootflickModelStories extends JModelList
{
	public function getListQuery()
	{
		$query = parent::getListQuery();
		
		$query->select('*');
		$query->from('#__rootflick_stories');
		
		return $query;
	}
	
	public function getItems()
	{
		$items = parent::getItems();
		foreach ($items as &$item)
		{
			$item->url = 'index.php?option=com_rootflick&amp;task=story.edit&amp;id=' . $item->id;
		}
		
		return $items;
	}
	
	public function getTable($type='Stories', $prefix='RootflickTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
}
