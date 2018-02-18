<?php
	
	if(isset($_POST["submit"])){
		$username =$_POST["user"]; $_SESSION["user"]=$username;
		$password =$_POST["pass"];
		$email = $_POST["email"];
		$contact = $_POST["contact"];
		$description =$_POST["description"];


		$conn=mysqli_connect("localhost","root","","skillconnect");

		$query = "INSERT INTO `college` (`collegeID`, `usrname`, `password`, `email`, `contact`, `description`) VALUES (NULL,'$username', '$password', '$email', '$contact', '$description')";
		$result=$conn->query($query);
		
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

		<input type="text" onkeypress='return ((event.charCode >= 48 && event.charCode <= 57 ) || event.charCode==8)' size="100" id="form-field-1" placeholder="contact no" name="contact">
		<br><br>

		<textarea id="form-field-1" placeholder="provide college description"  name="description"></textarea required="true"><br><br><br>
		
		
		<input type="submit" name="submit" value="signup">
		<a href="login.php"><input type="button" name="login" value="login"></a>

	
</form>




</div>