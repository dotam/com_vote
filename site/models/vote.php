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
    
    //////////////////////////////////////////////////////////////////////////
    
	function getVoteItem($id){
		$db = & JFactory::getDBO();
		$query = "SELECT id, text, hits FROM #__vote_item WHERE voteid = $id ";
		$db->setQuery($query);
		$item = $db->loadObjectList();
		return $item;
	}
    /////////////////////////////////////////////////////////////////////

	function calculateVote($listItem){
	   $total=0;
       foreach($listItem as $row){
        $total += $row->hits;
        
       }
       	$listPercent;
        
        foreach($listItem as $row){
        
        
        $listPercent[$row->text] = (int) ($row->hits *100/$total) ;
        
       }
       
       return $listPercent;
	
	}
    
    
    
    //////////////////////////////////////////////////////////////////////////
    // update data from Form into Database...................................
    
    //
    //
    function updateVote()
    {
   	    $db =& JFactory::getDBO();
        $idItem = JRequest::getInt('item',1,'default');
        
        $query1 ="SELECT `hits` FROM #__vote_item WHERE `id` = $idItem ";
        
        $db->setQuery( $query1 );
		$hits = $db->loadResult() + 1;
        
        
        $query = "UPDATE #__vote_item SET hits=$hits WHERE id=$idItem";
        $db->setQuery($query);
         
         
        return $db->query();
        
    }

}

?>
