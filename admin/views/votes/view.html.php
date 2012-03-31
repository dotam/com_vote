<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class VotesViewVotes extends JView
{
	
	function display($tpl = null)
	{
		JToolBarHelper::title(JText::_( 'Vote Manager' ));
		JToolBarHelper::deleteList();
		JToolBarHelper::editListX();
		JToolBarHelper::addNewX();

		// Get data from the model
		$items	= & $this->get( 'Data');

		$this->assignRef('items',	$items);
		//
		parent::display($tpl);
	}
}

?>


