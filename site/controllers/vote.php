<?php


// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class VoteControllerVote extends VoteController
{
	
	function __construct()
	{
		parent::__construct();

		// Register Extra tasks
		//$this->registerTask( 'add' , 'edit' );
	}
	
	/**
	 * save a record (and redirect to main page)
	 * @return void
	 */
	function updateVote()
	{
		$model = $this->getModel('vote');

		if ($model->updateVote()) {
			$msg = JText::_( 'Vote Saved!' );
		} else {
			$msg = JText::_( 'Error Saving Vote' );
		}
        
        
        $this->display();
        
        
		// Check the table in so it can be edited.... we are done with it anyway
		//$link = 'index.php?option=com_vote';
	//	$this->setRedirect($link, $msg);
	}
    function display()
    {
        //parent::display();
        //$link = 'index.php?option=com_vote';
		//$this->setRedirect($link);
        JRequest::setVar( 'view', 'vote' );
		JRequest::setVar( 'layout', 'graph'  );
		

		parent::display();
        
    }
	
}
