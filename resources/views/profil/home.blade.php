<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<center>
		<h1>First Name : {{$profils->firstName}}</label></h1><br>
		<label><h1>Last Name : {{$profils->lastName}}</h1></label><br>
		<label><h1>Street Adress : {{$profils->streetAddress}}</h1></label><br>
		<label><h1>Phone Number : {{$profils->e164PhoneNumber}}</h1></label><br>
		<label><h1>Job Title : {{$profils->jobTitle}}</h1></label><br>

		<button   class="ui primary button" onClick="history.go(0)">
			Reload
		</button>

		<br>
		

		<form action="json" metho='post'>
			<button  class="ui primary button" name="$ch = curl_init();" metho='post'>
				Get fichier Json
			</button>
		</form>



	</center>	




</body>
</html>