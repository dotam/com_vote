<?php defined('_JEXEC') or die('Restricted access'); ?>


<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col width-45">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Details' ); ?></legend>

		<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( 'Title' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="title" id="title" size="32" maxlength="250" 
                value="<?php echo $this->vote->title;?>" />
			</td>
		</tr>
	</table>
	</fieldset>
</div>



<div class="col width-45">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable">

			<tbody>
				<?php 	
				
				for ($i=0, $n=count( $this->item ); $i < $n; $i++) {
				$row = $this->item[$i];
				?>
					<tr>
						<td class="key">
							<label for="voteoption<?php echo $row->id; ?>">
								<?php echo JText::_( 'Option' ); ?> <?php echo ($i+1); ?>
							</label>
						</td>
						<td>
							<input class="inputbox" type="text" name="voteoption[<?php echo $row->id ?>]" id="voteoption<?php echo $row->id ?>" value="<?php echo $row->text; ?>" size="60" />
						</td>
					</tr>

			<?php } for (; $i < 10; $i++) { ?>
	           	<tr>
		              	<td class="key">
				            <label for="voteoption<?php echo $i + 1; ?>">
					       <?php echo JText::_( 'Option' ); ?> <?php echo $i + 1; ?>
			             	</label>
			         </td>
			          <td>
			     	<input class="inputbox" type="text" name="voteoption[]" id="voteoption<?php echo $i + 1; ?>" value="" size="60" />
			         </td>
		      </tr>
            <?php } ?>

			</tbody>
	</table>
	</fieldset>
</div>



<div class="clr"></div>

<input type="hidden" name="option" value="com_vote" />
<input type="hidden" name="id" value="<?php echo $this->vote->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="vote" />


</form>
