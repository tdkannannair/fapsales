 <?php
include 'dbconnect.php';
session_start();
	$name=$_POST['name'];
	$office=$_POST['office'];
	$trans=$_POST['trans'];
	$lan=$_POST['latitude'];
	$lon =$_POST['longitude'];
	$date=date("y/m/d");
	 $email=$_SESSION['email'];
	 $type=$_GET['type'];
	  
 
	  
	     
		$new_file_name = time().$_FILES['pic']['name'];
		$new_file_name2 = time().$_FILES['image1']['name'];
		$new_file_name3 = time().$_FILES['image2']['name'];
        move_uploaded_file($_FILES['pic']['tmp_name'],"images/upload/".$new_file_name);
		move_uploaded_file($_FILES['image1']['tmp_name'],"images/upload/".$new_file_name2);
		move_uploaded_file($_FILES['image2']['tmp_name'],"images/upload/".$new_file_name3);
		if($type=='shopkeeper'){ 
		 echo $sql1="insert into shop(email,name,date,pic,shop_certificate,ownership,lantitude,longitude,agri) values ('$email','$name','$date','$new_file_name','$new_file_name2','$new_file_name3','$lan','$lon','$office')";
		 mysqli_query($con,$sql1);
		}
		else{ 
		 $sql1="insert into farm(email,name,date,pic,farm_certificate,ownership,lantitude,longitude,panch_id) values ('$email','$name','$date','$new_file_name','$new_file_name2','$new_file_name3','$lan','$lon','$office')";
		 mysqli_query($con,$sql1);	
		}
		
		// header("location:../faPS/sendmail/mail.php?email=$email");

	// header("location:login.php");

	 
?>
