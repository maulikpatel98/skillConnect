<?php
session_start();
?>


<?php 
 include_once("skill_header1.php");
?>

<?php 
$id1=$_SESSION["typeid"];
$id2=$_SESSION["subid"];
if($id1 == "1")
echo "welcome you loged in as job provider";
if($id1 == "2")
echo "welcome you loged in as job seeker";
if($id1 == "3")
echo "welcome you loged in as college";

?>

</body>
</html>