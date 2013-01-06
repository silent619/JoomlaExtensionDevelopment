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
class RootflickControllerVote extends JControllerForm
{
	protected $view_list = 'stories';
	protected $vote_message = '';

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
		
		// check to see if the user is logged in and has the write to vote. 
		if (!$this->allowAdd())
		{
				
			$this->setMessage('Your vote was not submitted. ' . $vote_message, 'error');

			$this->setRedirect(
					JRoute::_(
							'index.php?option=' . $this->option . '&view=' . $this->view_list
							. $this->getRedirectToListAppend(), false
					)
			);

			return false;
		}
		$model->vote($user->id, $submission_id, $vote_type);
		$this->setMessage('Vote submitted Successfully' . $vote_message);
		$this->setRedirect(
				JRoute::_(
						'index.php?option=' . $this->option . '&view=' . $this->view_list
						. $this->getRedirectToListAppend(), false
				)
		);

	}
	protected function allowAdd($data = array())
	{
		$user		= JFactory::getUser();
		$allow		= null;
		$model = $this->getModel('Vote');
		$doubleVote = $model->checkVotes($user->id, JFactory::getApplication()->input->getInt('sid'));
		
		if ($user->guest)
		{
			$allow	= false;
			$this->vote_message = 'You must be logged in to vote!';
		}
		else {
			$allow = true;
		}
		
		// check to see if user has submitted vote for this chapter already.
		//don't allow voting twice by the same user and same submission.
		if ($doubleVote)
		{
			$allow = false;
			$this->vote_message = 'you cannot vote for the same entry twice!';
		}	

		return $allow;
	}
}
