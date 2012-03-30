<?php



defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Hello Table class
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class TableVote extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;

	/**
	 * @var string
	 */
	var $title = null;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function TableVote(& $db) {
		parent::__construct('#__vote', 'id', $db);
	}
}

?>
