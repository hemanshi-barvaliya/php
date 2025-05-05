<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Ajax Demo</title>
</head>
<body>

	<form method="POST" id="frm">
		<table border="1" cellspacing="0" cellpadding="2">
			
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
		
	</form>
	<div id="displaydata"></div>
	<script src="./js/jquery-3.7.1.min.js"></script>
	<script type="text/javascript">
		$(document).on('submit','#frm',function(e)
		{
			var record = $(this).serialize();

			e.preventDefault();

			$.ajax({

				method:'POST',
				url:'recordfrom.php',
				data:record,

				success:function(response)
				{
					$('#displaydata').html(response);
				}
			})
			
				$('frm')[0].reset();

		})

	</script>
</body>
</html>