 <?php
 session_start();
include 'dbconnect.php';
	$name =$_POST['name'];
	$address =$_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$place =$_POST['place'];
	$gender =$_POST['gender'];
	$password =$_POST['password'];
	$cpassword =$_POST['cpassword'];
	 $type=$_POST['user'];
	 $_SESSION['email']=$email;
 

	 
	$sql4="select * from login where email='$email'";
		$result=mysqli_query($con,$sql4);
		$rowcount=mysqli_num_rows($result);
		if($rowcount !=0 )
		{
			echo"<script>alert('user al;redy exists')</script>";
			echo header("location:registeration.php?error=User Already Exist");
			
			exit;
		}
	
	if($password == $cpassword)
	{
	
		$sql1="insert into registeration(name,adress,email,place,gender,contact) values ('$name','$address','$email','$place','$gender','$phone')";
		$sql2="insert into login(email,type,password,status) values ('$email','$type','$password',0)";
	 
		
	$res=mysqli_query($con,$sql1);
	$res1=mysqli_query($con,$sql2);
	
	if($res)
	{

	header("location:registeration2.php?type=$type");

	}
	
	}
	else
	{
	echo header("location:registeration.php?error=password mismatch");
	}		
	
?>
