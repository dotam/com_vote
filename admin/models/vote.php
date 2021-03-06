<?php


defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.model');


class VotesModelVote extends JModel
{
	/**
	 * Constructor that retrieves the ID from the request
	 *
	 * @access	public
	 * @return	void
	 */
	function __construct()
	{
		parent::__construct();

		$array = JRequest::getVar('cid',  0, '', 'array');
		$this->setId((int)$array[0]);
	}

	

	function setId($id)
	{
		// Set id and wipe data
		$this->_id		= $id;
		$this->_data	= null;
	}

	/**
	 * Method to get a hello
	 * @return object with data
	 */
	function &getData()
	{
		// Load the data
		if (empty( $this->_data )) {
			$query = ' SELECT * FROM #__vote '.
					'  WHERE id = '.$this->_id;
			$this->_db->setQuery( $query );
			$this->_data = $this->_db->loadObject();
		}
		if (!$this->_data) {
			$this->_data = new stdClass();
			$this->_data->id = 0;
			$this->_data->title = null;
		}
		return $this->_data;
	}
///////////////////////////////////////////////////////////////////
	/**
	 * Method to get a vote
	 * @return object with data
	 */
	function &getItem()
	{
		$db = & JFactory::getDBO();
		$query = 'SELECT id,text FROM #__vote_item WHERE voteid = '.$this->_id;
		$db->setQuery($query);
		$item = $db->loadObjectList();
		return $item;
	}
    
////////////////////////////////////////////////////////////////////

	/**
	 * Method to store a record
	 *
	 * @access	public
	 * @return	boolean	True on success
	 */
	function store( )
	{	
		$row =& $this->getTable();
        $db = & JFactory::getDBO();
		$data = JRequest::get( 'post' );

		// Bind the form fields to the vote table
		if (!$row->bind($data)) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}
        $isNew = ($row->id == 0);

		// Make sure the hello record is valid
		if (!$row->check()) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		// Store the web link table to the database
		if (!$row->store()) {
			$this->setError( $row->getErrorMsg() );
			return false;
		}
        $row->checkin();
        

        $options=& JRequest::getVar( 'voteoption', array(), 'post', 'array' );

		foreach ($options as $i=>$text)
		{
			
            $text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
			if ($isNew)
			{
			    
				$obj = new stdClass();
				$obj->voteid = (int)$row->id;
				$obj->text   = $text;
				$db->insertObject('#__vote_item', $obj);
			}
			else
			{    
			 
             
				$obj = new stdClass();
				$obj->id     = (int)$i;
                $obj->voteid = $row->id;
				$obj->text   = $text;
				$db->updateObject('#__vote_item', $obj, 'id');
			}
            
		
		}

        
        

		return true;
	}

	/**
	 * Method to delete record(s)
	 *
	 * @access	public
	 * @return	boolean	True on success
	 */
	function delete()
	{
		$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );

		$row =& $this->getTable();

		if (count( $cids )) {
			foreach($cids as $cid) {
				if (!$row->delete( $cid )) {
					$this->setError( $row->getErrorMsg() );
					return false;
				}
			}
		}
		return true;
	}

}

?>
