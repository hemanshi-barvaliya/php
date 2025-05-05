<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php with Table</title>
</head>
<style type="text/css">
	#box{
		border: none;
		height: 30px;
		}
		input[type=text]{
			height: 50px;
			font-size: 18px;
			width: 120px;
			text-align: center;

		}
		.title{
			height: 50px;
			font-size: 25px;
			width: 120px;
			text-align: center;

		}
</style>
<body>
<table border="1" style="background-color: lightgray;">
	<tr class=title>
		<td> R_no</td>
		<td> name </td>
		<td> sub1 </td>
		<td> sub2 </td>
		<td> sub3 </td>
		<td> total </td>
		<td> per </td>
		<td> max </td>
		<td> min </td>
		
	</tr>
	<tr id="box">
		<td>
			<input type="text" name="" value="<?php $id="1"; echo $id; ?>">
		</td>
		<td>
			<input type="text" name="" value="<?php $name="hem"; echo $name; ?>">
		</td>	
		<td>
			<input type="text" name="" value="<?php $sub1="90"; echo $sub1; ?>">
		</td>
		<td>
			<input type="text" name="" value="<?php $sub2="94"; echo $sub1; ?>">
		</td>
		<td>
			<input type="text" name="" value="<?php $sub2="95"; echo $sub2; ?>">
		</td>	
		<td>
			<input type="text" name="" value="<?php $total="279"; echo $total; ?>">
		</td>	
		<td>
			<input type="text" name="" value="<?php $per="93"; echo $per; ?>">
		</td>
		<td>
			<input type="text" name="" value="<?php $max="95"; echo(max(93,95,90,94)); ?>">
		</td>	
		<td>
			<input type="text" name="" value="<?php $Min="90"; echo(min(93,95,90,90)); ?>">
		</td>
	</tr>
	<tr id="box">
		<td>
			<input type="text" name="" value="<?php $id="2"; echo $id; ?>">
		</td>
		<td>
			<input type="text" name="" value="<?php $name="hemanshi"; echo $name; ?>">
		</td>	
		<td>
			<input type="text" name="" value="<?php $sub1="90"; echo $sub1; ?>">
		</td>
		<td>
			<input type="text" name="" value="<?php $sub2="94"; echo $sub1; ?>">
		</td>
		<td>
			<input type="text" name="" value="<?php $sub2="95"; echo $sub2; ?>">
		</td>	
		<td>
			<input type="text" name="" value="<?php $total="279"; echo $total; ?>">
		</td>	
		<td>
			<input type="text" name="" value="<?php $per="93"; echo $per; ?>">
		</td>
		<td>
			<input type="text" name="" value="<?php $max="95"; echo(max(93,95,90,94)); ?>">
		</td>	
		<td>
			<input type="text" name="" value="<?php $Min="90"; echo(min(93,95,90,94)); ?>">
		</td>
		
	</tr>
</table>

</body>
</html>