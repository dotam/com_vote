<?php


defined('_JEXEC') or die('Restricted access');


jimport( 'joomla.application.component.view');


class VoteViewVote extends JView
{
 function display($tpl = null)
	{
		$result = $this->get( 'Select_item' ); //ko hieu, mình nghĩ là funstion từ lớp view "getSelect_item"
		$this->assignRef( 'result',	$result );

		parent::display($tpl);
	}
}

?>