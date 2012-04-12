<html>
<head>
<style tyle="text/css">
#voteform{
    border:5px solid green;
    background-color: #E0E0E0;
    width: 500px;
    
    
}
td{
    font-size: 18px;
    font-weight: lighter;
    
}
h2{
    color: #990000;
}
</style>
</head>
<body>


<div id="voteform">

<form  method="post" action="index.php" >
<table border=0  bgcolor="" cellspacing=2 cellpadding=0>
	<tr><td colspan=2 ><font face="Verdana" size='' color="000000"><h2> <?php echo $this->vote->title;?> </h2></font>
		</td>
	</tr>
	<?php 
	
	foreach ($this->voteItem as $row) {
	?>
			<tr>
				<td width=5><input type='radio' name='item' value='<?php echo $row->id ?>' /></td>
				<td ><font face="Verdana" size="" color="green"><label ><?php echo
				$row->text ?></label></font>
                    
                </td>
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
</div>
</body>
</html>
