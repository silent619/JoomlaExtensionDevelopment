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
	public function getTable($type='Stories', $prefix='RootflickTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
}
