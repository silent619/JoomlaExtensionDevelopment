<?php
/**
 * @package     ShowPath.Plugin
 * @subpackage  ShowPath
 *
 * @copyright   2012 - Copyright Chad Windnagle
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_BASE') or die;

/**
 * System plugin to show path of layout templates.
 *
 * @package     ShowPath.Plugin
 * @subpackage  ShowPath
 * @since       1.0
 */
class PlgSystemShowpath extends JPlugin
{
	/**
	 * Method to catch the onBeforeRender event.
	 *
	 * This is where we call the other functions and override modules.php
	 *
	 * @return  boolean  True on success
	 *
	 * @since   1.0
	 */
	public function onBeforeRender()
	{
		$app = JFactory::getApplication();

		// Check that we are in the site application.
		if ($app->isAdmin())
		{
			return true;
		}

		// Override the core module classes
		require_once __DIR__ . '/class_override/module.php';
		require_once __DIR__ . '/class_override/modules.php';

		// Get the component path and output
		$pathArr = $this->getComponentPath();
		$pathStr = $this->getPath($pathArr);

		echo '<pre>Component View path: ' . $pathStr . '</pre>';

		return true;
	}

	/**
	 * Function which builds a component path array
	 *
	 * @return string
	 */
	public function getComponentPath()
	{

		// Get the app
		$app = JFactory::getApplication();

		// Get the option, view, and layout.
		$option = $app->input->get('option', '', 'cmd');
		$view   = $app->input->get('view', '', 'cmd');
		$layout = $app->input->get('layout', '', 'cmd');

		// Return array of these to be used later
		$path = array(
			'path'   => $option,
			'view'   => $view,
			'layout' => $layout
		);

		return $path;
	}

	/**
	 * Check if an overriden path exists
	 *
	 * @param   array  $path  Array with current option, view and layout
	 *
	 * @return boolean
	 */
	public function isOverridden($path)
	{
		// Get the app
		$app = JFactory::getApplication();

		// Get current template
		$tmpl = $app->getTemplate();

		// Set the path string
		$pathString = $this->makePath($path);

		// Check for override
		if (is_dir('templates/' . $tmpl . '/html/' . $pathString))
		{
			return true;
		}
		return false;
	}

	/**
	 * Simple function that converts the option, view, and layout to a path
	 *
	 * @param   array  $path  Array with current option, view and layout
	 *
	 * @return string
	 */
	public function makePath($path)
	{
		$pathstring = '';

		foreach ($path as $dir)
		{
			$pathstring .= $dir . '/';
		}

		return $pathstring;
	}

	/**
	 * Get the component path
	 *
	 * @param   array  $path  Array with current option, view and layout
	 *
	 * @return string
	 */
	public function getPath($path)
	{

		// Get the app
		$app = JFactory::getApplication();

		// Get current template
		$tmpl = $app->getTemplate();

		$pathstring = $this->makePath($path);

		if ($this->isOverridden($path))
		{
			$pathstring = 'templates/' . $tmpl . '/html/' . $pathstring;
		}
		else
		{
			$pathstring = 'components/' . $pathstring;
		}

		return $pathstring;
	}
}
