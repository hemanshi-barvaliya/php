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
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder="Enter Email"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="send"></td>
				</tr>

			</table>
		</form>

		<div id="displaydata"></div>

		<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

		<script>
			$(document).on('submit','#frm',function(e){

					var rec = $(this).serialize();

					//console.log(rec);

					e.preventDefault();

					$.ajax({

						method: 'POST',
						url: 'recordform.php',
						data: rec,

						success:function(response){
							$('#displaydata').html(response);
						}

					})

					$('#frm')[0].reset();
			})
		</script>
</body>
</html>