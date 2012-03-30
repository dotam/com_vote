<?php


defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );



class VotesModelVotes extends JModel
{
	
	var $_data;


	
	function _buildQuery()
	{
		$query = ' SELECT * '
			. ' FROM #__vote '
		;

		return $query;
	}

	
	function getData()
	{
		// Lets load the data if it doesn't already exist
		if (empty( $this->_data ))
		{
			$query = $this->_buildQuery();
			$this->_data = $this->_getList( $query );
		}

		return $this->_data;
	}
}
