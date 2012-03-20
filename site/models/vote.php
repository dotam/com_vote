<?php

defined('_JEXEC') or die('Restricted access');


jimport( 'joomla.application.component.model' );
class VoteModelVote extends JModel
{
    
	/**
	 * biến $id trong phương thức select_item này là "id" trong table "__vote"
	 * biến này có đươc là do use chọn "title" trong table "__vote"
	 * giá trị biến $id có đuoc từ lop controller
	 */
	function getSelect_item($id)
	{
		$id = (int) $id;
		$db =& JFactory::getDBO();

		$query = 'SELECT text, hits FROM #__vote_item WHERE voteid='.(int)$id;
		$db->setQuery( $query );
		$result = $db->loadRowList();

		return $result; //ket quả này đưa lên site/views/vote/view.html.php
	}

}

?>