<?php
/**
 * @package     ShowPath.Plugin
 * @subpackage  ShowPath
 *
 * @copyright   Copyright Chad Windnagle - 2012
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
		
		if (!$app->isAdmin())
		{
		
			//override the core module classes
			require_once(__DIR__.'/class_override/module.php');
			require_once(__DIR__.'/class_override/modules.php');
			
			//get the component path and output
			$pathArr = self::getComponentPath();
			$pathStr = self::getPath($pathArr);
					
			echo '<pre>Component View path: ' . $pathStr .'</pre>';
		}
		return true;
	}
	
	
	// function which builds a component path array
	public function getComponentPath() {
		
		// get the app
		$app = JFactory::getApplication();
		
		// get the option, view, and layout.
		$option = $app->input->get('option', '', 'cmd');
		$view =  $app->input->get('view', '', 'cmd');
		$layout = $app->input->get('layout', '', 'cmd');
		
		// return array of these to be used later
		$path = array(
			'path' => $option,
			'view' => $view,
			'layout' => $layout
		);
		
		return $path;
	}
	
	public function isOverridden($path)
	{
		// get the app
		$app = JFactory::getApplication();
		
		// get current template
		$tmpl = $app->getTemplate();
		
		// import jfolder
		jimport('joomla.filesystem.path');
		jimport('joomla.filesystem.folder');
		
		// set the path string
		$pathString = self::makePath($path);
		
		// check for override
		if (JFolder::exists('templates/'.$tmpl.'/html/'.$pathString))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function makePath($path)
	{
		$pathstring = '';
		
		foreach($path as $dir)
		{
			$pathstring .= $dir . '/';
		}
		
		return $pathstring;
	}
	
	// simple function that converts the
	// option, view, and layout to a path
	public function getPath($path)
	{
		
		// get the app
		$app = JFactory::getApplication();
		
		// get current template
		$tmpl = $app->getTemplate();
		
		$pathstring = self::makePath($path);
			
		if (self::isOverridden($path))
		{
			$pathstring = 'templates/'.$tmpl.'/html/'.$pathstring;
		}
		else
		{
			$pathstring = 'components/'.$pathstring;
		}
				
		return $pathstring;	
	}

}