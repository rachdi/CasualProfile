<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
	<center>
		<h1>First Name : <?=$profils->firstName?></label></h1><br>
		<label><h1>Last Name : <?=$profils->lastName?></h1></label><br>
		<label><h1>Street Adress : <?=$profils->streetAddress?></h1></label><br>
		<label><h1>Phone Number : <?=$profils->e164PhoneNumber?></h1></label><br>
		<label><h1>Job Title : <?=$profils->jobTitle?></h1></label><br>
		<form>
			<input type="button" onClick="history.go(0)" value="Reload">
		</form><br>
		
	</center>	




</body>
</html>