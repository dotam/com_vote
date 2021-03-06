<?php


defined('_JEXEC') or die('Restricted access');


jimport( 'joomla.application.component.view');


class VoteViewVote extends JView
{
 function display($tpl = null)
	{
		// get data from model
		$model = &$this->getModel();
		
		$vote = $model->getVote();
		
		$voteItem = $model->getVoteItem($vote->id);
        
        $listPercent = $model->calculateVote($voteItem);
        
		
		//push data to template................
		$this->assignRef('vote',$vote);
		$this->assignRef('voteItem',$voteItem);
        $this->assignRef('listPercent',$listPercent);
		
		//.................................
		parent::display($tpl);
	}
}

?>
