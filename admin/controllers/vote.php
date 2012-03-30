<?php


// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class VotesControllerVote extends VotesController
{
	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();

		// Register Extra tasks
		$this->registerTask( 'add' , 'edit' );
	}

	/**
	 * display the edit form
	 * @return void
	 */
	function edit()
	{
		JRequest::setVar( 'view', 'vote' );
		JRequest::setVar( 'layout', 'form'  );
		JRequest::setVar('hidemainmenu', 1);

		parent::display();
	}

	/**
	 * save a record (and redirect to main page)
	 * @return void
	 */
	function save()
	{
		$model = $this->getModel('vote');

		if ($model->store($post)) {
			$msg = JText::_( 'Title Saved!' );
		} else {
			$msg = JText::_( 'Error Saving Greeting' );
		}

		// Check the table in so it can be edited.... we are done with it anyway
		$link = 'index.php?option=com_vote';
		$this->setRedirect($link, $msg);
	}

	/**
	 * remove record(s)
	 * @return void
	 */
	function remove()
	{
		$model = $this->getModel('vote');
		if(!$model->delete()) {
			$msg = JText::_( 'Error: One or More Greetings Could not be Deleted' );
		} else {
			$msg = JText::_( 'Title(s) Deleted' );
		}

		$this->setRedirect( 'index.php?option=com_vote', $msg );
	}

	/**
	 * cancel editing a record
	 * @return void
	 */
	function cancel()
	{
		$msg = JText::_( 'Operation Cancelled' );
		$this->setRedirect( 'index.php?option=com_vote', $msg );
	}
}
