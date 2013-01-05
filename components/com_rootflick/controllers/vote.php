<?php
/**
 
 * @package		Joomla25.Bizform
 * @subpackage	Components
 * @author		Chad Windnagle
 * @link		http://www.chadwindnagle.com
 * @license		License GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

/**
 * Base controller class for RootFlick.
 *
 * @package		Joomla.Site.Admin
 * @subpackage	com_rootflick
 * @since		1.5
 */

jimport('joomla.application.controller');
jimport( 'joomla.access.access' );
class RootflickControllerVote extends JControllerLegacy
{
	public function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask('vote', 'vote');
	}
	
	public function vote()
	{
		$task		= JFactory::getApplication()->input->get('task');
		$user		= JFactory::getUser();
		$vote_type	= "registered";
		$usergroup = JAccess::getGroupsByUser($user->id, false); // get the user group id
		if ($usergroup[0] > 3) {  // check against first user group
			$vote_type = "author";
		}
		$submission_id = JFactory::getApplication()->input->getInt('sid');
		$model = $this->getModel('Vote');
		
		$model->vote($user->id, $submission_id, $vote_type);
		//echo "vote submitted!";
	}
}
