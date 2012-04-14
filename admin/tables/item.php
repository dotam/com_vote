<?php



defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Vote Table class
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class TableItem extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;

	/**
	 * @var int
	 */
	var $voteid = null;


	/**
	 * @var string
	 */
	var $text = null;

	/**
	 * @var int
	 */
	var $hits = null;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function TableItem(& $db) {
		parent::__construct('#__vote_item', 'id', $db);
	}
}

?>
