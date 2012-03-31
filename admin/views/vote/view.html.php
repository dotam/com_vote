
<?php


defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );


class VotesViewVote extends JView
{
	

	function display($tpl = null)
	{
		//get the vote
		$vote		=& $this->get('Data');
		//$item		=& $this->get('Item');
		$isNew		= ($vote->id < 1);

		$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );
		JToolBarHelper::title(   JText::_( 'Vote' ).': <small><small>[ ' . $text.' ]</small></small>' );
		JToolBarHelper::save();
		if ($isNew)  {
			JToolBarHelper::cancel();
		} else {
			// for existing items the button is renamed `close`
			JToolBarHelper::cancel( 'cancel', 'Close' );
		}

		$this->assignRef('vote', $vote);
		//$this->assignRef('item', $item);

		parent::display($tpl);
	}
}

?>
