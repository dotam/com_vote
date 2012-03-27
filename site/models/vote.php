<?php

defined('_JEXEC') or die('Restricted access');


jimport( 'joomla.application.component.model' );


class VoteModelVote extends JModel
{
    
	// phuong thuc lay vote duoc chon tu bang 'vote' va cac item 
	// trong bang 'vote_item' 
	// vote duoc chon la vote co 'checked' = 1 (true) =0 (false)
	// chi co 1 vote duoc chon trong bang 'vote'


	function getVote()
	{
		
		$db =& JFactory::getDBO();

		$query = "SELECT id, title FROM #__vote WHERE checked = '1' ";
		$db->setQuery( $query );
		$vote = $db->loadObject();

		return $vote; //ket quả này đưa lên site/views/vote/view.html.php
	}
	function getVoteItem($id){
		$db = & JFactory::getDBO();
		$query = "SELECT id, text, hits FROM #__vote_item WHERE voteid = $id ";
		$db->setQuery($query);
		$item = $db->loadObjectList();
		return $item;
	}

}

?>