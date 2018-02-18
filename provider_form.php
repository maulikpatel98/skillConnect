<?php
	
	if(isset($_POST["submit"])){
		$username =$_POST["user"]; $_SESSION["user"]=$username;
		$password =$_POST["pass"];
		$email = $_POST["email"];
		$contact = $_POST["contact"];
		$company =$_POST["company"];
		$requirement =$_POST["requirement"];
		$locations =$_POST["location"];

		$conn=mysqli_connect("localhost","root","","skillconnect");

		$query = "INSERT INTO `jobprovider` (`providerID`, `usrname`, `password`, `email`, `contact`, `company`, `requirement`, `locations`) VALUES (NULL,'$username', '$password', '$email', '$contact', '$company', '$requirement', '$locations')";
		$result=$conn->query($query);
		if($result)
		echo ("<script>location.href='skillconnect_welcome.php'</script>");
	}

?>
<div style="margin-left:250px;">
	
<form method="post">
	
		
			<input type="text" size="100" id="form-field-1" placeholder="create your username"  name="user" required="true">
			<br><br>
		
		<input type="password" size="100" id="form-field-1" placeholder="create your password" name="pass" required="true">
		<br><br>

		<input type="email" size="100" id="form-field-1" placeholder="email address" name="email" required="true">
		<br><br>

		<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' size="100" id="form-field-1" placeholder="contact no" name="contact">
		<br><br>
		

		
		<input type="text" size="100" id="form-field-1" placeholder="enter company/NGO name" name="company" required="true">
		<br><br>
		

		<input type="text" size="100" id="form-field-1" placeholder="enter required post" name="requirement" required="true">
		<br><br>
		
		<textarea id="form-field-1" placeholder="enter your location(multiple allowed separated by comma)"  name="location"></textarea><br><br><br>
		
		<input type="submit" name="submit" value="signup">
		<a href="login.php"><input type="button" name="login" value="login"></a>

	
</form>




</div>