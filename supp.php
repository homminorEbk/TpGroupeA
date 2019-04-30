<?php 
if (isset($_GET['id']))
		{
		$conn=mysqli_connect("localhost","root","","tpgroupea");
		$ids=$_GET['id'];
		
		$exe=mysqli_query($conn,"DELETE FROM users where id='".$ids."'");
		header("Location:suppression.php");
		}
		else
		echo $ids;
?>