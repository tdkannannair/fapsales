	<?php
include 'dbconnect.php';?>
<!DOCTYPE HTML>
 
<link rel="stylesheet" type="text/css" href="css/PIC.css"/>
<link rel="stylesheet" type="text/css" href="css/selectbox.css"/>
<head>
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon_tkv.png">
	<title>shope registeration</title>
	 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validator Signup Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css file -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- //css file -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>
	<!-- title -->
	<h1>
		
		<span>S</span>ignup
		<span>F</span>orm
	</h1>
	<!-- //title -->
	<!-- content --><?php $type=$_GET['type']; ?>
	<div class="sub-main-w3">
		<form validate="true" action="regaction2.php?type=<?php echo $type; ?>" method="post" enctype="multipart/form-data">
		<?php 
		if($type=='shopkeeper'){ 
			  $s='Shop';
			  $s1='Shopkeeper';
		 }
		else
		{
			$s='Farm';
			$s1='Farmer';
			}
		?>

			<div class="form-group"> 
				<label for="exampleInputText"><?php echo $s; ?> Name</label>
				<input type="text" class="form-control" name="name" id="exampleInputText" placeholder="Enter Name" required>
			</div>
	  
			<div class="form-group">
				<label for="exampleInputText">Office</label>
				<div id="mainselection">
  					<select name="office" id=" " required>
					  <option  value disabled selected> office near to you</option>
					<?php

$res = mysqli_query($con,"select * from officer");

while($row = mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row['panch_name']; ?>"> <?php echo $row['panch_name']; ?></option>
<?php
}
?>
					 
				</select>
</div>
			</div>

  
		 
 
			 
			<div class="form-group" style="color:#fff;">
				<label for="exampleInputText">transportation :</label>
				 
  <input type="radio" name="trans" value="yes"> yes
  <input type="radio" name="trans" value="no"checked> no
			</div>
 
	  <div class="form-group">
	  <h1 style="color:#fff;">Upload</h1>
		 			 <p style="color:#fff;"> <?php echo $s; ?> picture 
  						</p>
			 			 </div>
				 <div class="form-group">
			  			 <canvas id = "div2"></canvas>
					<script src= "js/PIC2.js"></script>
						<p style="color:#fff;">
  							filename:
					<input type = "file" name="pic" multiple = "false" accept = "image/*" id = "finput2" onchange = "upload()"  required />

  						</p>
		 </div> 
			 <!-- SSECOND IMAGE END-->
			  
	 

<div>
 <p style="color:#fff;">
 <?php echo $s; ?> certificate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="file" id='image1' name='image1' accept="image/*" data-type='image' style="color:#fff;" onChange="validate_fileupload(this.value)";required /><br /> 

  						</p>
  						<br /> 
	 
</div>
<div>
 <p style="color:#fff;">
  							 Ownership certificate :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="file" name="image2" id='image2'  accept="image/*" data-type='image' style="color:#fff;" onChange="validate_fileupload(this.value)";required /><br /> 

  						</p>
  						<br /> 
 </div>  
	 	  
  
  <div class='form-group'>
         
            <p style="color:aqua">Current Latitude</p>
      <input id="lat_field" name="latitude" type="text"> 
    
           <p style="color:aqua">Current Longitude</p>
      <input id="long_field" name="longitude" type="text"> 
      
  
  </div>


  
 
			 
			
			<!--location end-->

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div> 
	<div class="footer">
		 
	</div>
	</div>
	<script src="js/jquery-2.2.3.min.js"></script>
	 
	<script src="js/jquery-simple-validator.min.js"></script>
	<script type="text/javascript"src="js/map.js">
	
	</script>	 
<script type="text/javascript"src="js/selcet.js">


function validate_fileupload(fileName)
{
    var allowed_extensions = new Array("jpg","png","gif");
    var file_extension = fileName.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.

    for(var i = 0; i <= allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension)
        {
            return true; // valid file extension
        }
    }
		$('#photo').val(null);
    return false;
}
	</script>
	<div allign="center" style="width:100%;height:auto">
<?php
if(isset($_GET['error'])){
 $error=$_GET['error'];
echo  "<font color=red size=5>".$error;
}
?>
</div>
	 

</body>