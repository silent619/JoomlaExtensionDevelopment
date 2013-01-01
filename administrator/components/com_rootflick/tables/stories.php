<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_categories
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Category table
 *
 * @package     Joomla.Administrator
 * @subpackage  com_categories
 * @since       1.6
 */
class RootflickTableStories extends JTable
{	
	/**
	 * Constructor
	 *
	 * @since	1.5
	 */
	public function __construct(&$_db)
	{	
		parent::__construct('#__rootflick_stories', 'id', $_db);
		$date = JFactory::getDate();
	}
	protected function getListQuery()
	{
		$query->select(*);
		$query->from($db->quoteName('#__rootflick_stories'));
		
		return $query;
		
	}
	
	public function getTable($type = 'Stories', $prefix = 'RootflickTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
}
