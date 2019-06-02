<?php
session_start();

include ("dbconnect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from login where email='$email'";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);

if($rowcount !=0 )
{
	while($row=mysqli_fetch_array($result))
	{
		$dbuid=$row['reg_id'];
		$dbuemail=$row['email'];
		$dbupass=$row['password'];
		$type=$row['type'];
		$status=$row['status'];
		
		if($dbuemail==$email && $dbupass==$password && $type=="admin" && $status=="1")
		{
			$_SESSION['email']=$dbuemail;
			$_SESSION['password']=$dbupass;
			$_SESSION['type_id']=$type;
			header("location:../FaPS/admin/admin.php");
		 
		}
		elseif($dbuemail==$email && $dbupass==$password && $type=="shopkeeper" && $status=="1")
		{
			$_SESSION['email']=$dbuemail;
			$_SESSION['password']=$dbupass;
			$_SESSION['type_id']=$type;
			header("location:../FaPS/shopkeeper/shopkeeper.php");
		}
		elseif($dbuemail==$email && $dbupass==$password && $type=="farmer" && $status=="1")
		{
			$_SESSION['email']=$dbuemail;
			$_SESSION['password']=$dbupass;
			$_SESSION['type_id']=$type;
			header("location:../FaPS/farmer/farmer.php");
			 
		}
		elseif($dbuemail==$email && $dbupass==$password && $type=="arg_off" && $status=="1")
		{
			$_SESSION['email']=$dbuemail;
			$_SESSION['password']=$dbupass;
			$_SESSION['type_id']=$type;
			header("location:../FaPS/office/office.php");
		}
		 
		  
		elseif($dbuemail==$email && $dbupass==$password && $type=="officer" && $status=="1")
		{
			$_SESSION['email']=$dbuemail;
			$_SESSION['password']=$dbupass;
			$_SESSION['type_id']=$type;
			header("location:../FaPS/../FaPS/office/office.php");
		}
		else 
		{
			 header("location:../FaPS/login.php?error=Invalid Password");
		}

	}
}
else
		{
			header("location:../FaPS/login.php?error=Invalid EMAIL");
		}


?>
