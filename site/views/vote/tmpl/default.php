<form  method="post" action="index.php">
<table border=0 width=150 bgcolor="EEEEEE" cellspacing=2 cellpadding=0>
	<tr><td colspan=2><font face="Verdana" size=-1 color="000000"><b> <?php echo $this->vote->title;?> </b></font>
		</td>
	</tr>
	<?php 
	
	foreach ($this->voteItem as $row) {
	?>
			<tr>
				<td width=5><input type='radio' name='item' value='<?php echo $row->id ?>' /></td>
				<td><font face="Verdana" size=-1 color="000000"><label ><?php echo
				$row->text ?></label></font></td>
			</tr>
	<?php
	;}
	?>
	
	
	<tr>
		<td colspan=2><center>
		<input type="submit" value="Vote"/>&nbsp;&nbsp;
		<a href="index.php?option=com_vote&controller=vote&task=display">
		<input type="button" name="view" value="View"/>
		</a>
		</center>
		</td>
	</tr>
</table>
	<input type="hidden" name="option" value="com_vote" />                  
	<input type="hidden" name="controller" value="vote" />                    
	<input type="hidden" name="task" value="updateVote" />
	  
</form>
