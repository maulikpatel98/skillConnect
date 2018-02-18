
<?php
session_start();
include_once 'skill_header.php';
?>

<?php 

if(isset($_POST["select"]))
{
	if($_POST["s1"]=="provider"){
		$_SESSION["typeid"] = "1" ;
		echo ("<script>location.href='getdata.php'</script>");
	}

	if($_POST["s1"]=="seeker"){
		$_SESSION["typeid"] = "2" ;
		echo ("<script>location.href='getdata.php'</script>");
	}
	
	if($_POST["s1"]=="college"){
		$_SESSION["typeid"] = "3" ;
		echo ("<script>location.href='getdata.php'</script>");
	}
}

else 
	$_SESSION["typeid"] = "0" ;

?>


						<div>
						<h4>please select the role from below..! </h4>
							<form method="post">
								jobseeker:<input type="radio" name="s1" value="seeker" checked="true"><br>
								jobprovider:<input type="radio" name="s1" value="provider"><br>
								college:<input type="radio" name="s1" value="college"><br>

									<!-- <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
					 -->		<input type="submit" name="select" value="select">
									<!-- 	</div>
									</div> -->
							</form>
						</div>