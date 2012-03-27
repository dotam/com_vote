<form method="post" action="http://poll.pollcode.com/x30s">
<table border=0 width=150 bgcolor="EEEEEE" cellspacing=2 cellpadding=0>
	<tr><td colspan=2><font face="Verdana" size=-1 color="000000"><b> <?php echo $this->vote->title;?> </b></font>
		</td>
	</tr>
	<?php 
	
	foreach ($this->voteItem as $row) {
		echo '<tr>
				<td width=5><input type=radio name=answer value="'. $row->id . '" ></td>
				<td><font face="Verdana" size=-1 color="000000"><label >'
				. $row->text . '</label></font></td>
			</tr>';
		
	}
	
	?>
	
	<tr>
		<td colspan=2><center>
		<input type=submit value="Vote">&nbsp;&nbsp;
		<input type=submit name=view value="View">
		</center>
		</td>
	</tr>
</table>
</form>
