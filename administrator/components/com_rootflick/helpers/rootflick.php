<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Content component helper.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_content
 * @since       1.6
 */
class RootflickHelper
{
	public static $extension = 'com_rootflick';

	/**
	 * Configure the Linkbar.
	 *
	 * @param	string	$vName	The name of the active view.
	 *
	 * @return	void
	 * @since	1.6
	 */
	public static function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(
				JText::_('COM_ROOTFLICK_SUBMENU_CP'),
				'index.php?option=com_rootflick',
				$vName == 'rootflick'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_ROOTFLICK_SUBMENU_STORIES'),
			'index.php?option=com_rootflick&view=stories',
			$vName == 'stories'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_ROOTFLICK_SUBMENU_CHAPTERS'),
			'index.php?option=com_rootflick&view=chapters',
			$vName == 'chapters');
		JHtmlSidebar::addEntry(
			JText::_('COM_ROOTFLICK_SUBMENU_SUBMISSIONS'),
			'index.php?option=com_rootflick&view=submits',
			$vName == 'submits'
		);
	}
	
}