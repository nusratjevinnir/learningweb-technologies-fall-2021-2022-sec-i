<?php 

	
	if(isset($_REQUEST['submit'])){
		$date = $_REQUEST['mydateofbirth'];
		
	}

?>


<html>
<head>
	<title>DATE OF BIRTH</title>
</head>
<body>
	<form method="post" >
		DOB: <input type="date" name="mydateofbirth" value=""/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>