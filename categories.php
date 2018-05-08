<?php include('includes/db.php');

include('includes/sessions.php');

?>




<?php

if(isset($_POST['login-button']))
{

	$login = $_POST['login-username'];

	date_default_timezone_set('Asia/Kolkata');

	$time = time();

	$timeKeeper = strftime("%B-%Y-%m %H:%M:%S",$time);

	$admin = "Mario AJ";

	if(empty($login))
	{
		$_SESSION['errorMessage']= "Name field cannot be empty";

		header("Location:dashboard.php");
	}else if(strlen($login)>99)
	{
		$_SESSION['errorMessage']= "Name field is too long";

		header("Location:dashboard.php");

	}else{

     

    $query = "INSERT INTO category(date_time,name,creator_name) VALUES('$timeKeeper','$login','$admin')";

    $execute = mysqli_query($con,$query);

    if($execute)
    {
    	$_SESSION['serrorMessage']= "Category Added successfully";

    	header("Location:dashboard.php");



    }else{
    
    $_SESSION['errorMessage']= "Category failed to add";

		header("Location:dashboard.php");


    }


	}


}

 ?>
 





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
 
<div class="container-fluid">
	
<div class="row">
	

<div class="col-sm-2">
	

 


<ul class="nav nav-pills nav-stacked" id="sideBar">
	

<li><a href="dashboard.php">Dashboard</a></li>


<li><a href="addnewpost.php">Add new Post</a></li>


<li class="active"><a href="categories.php">Categories</a></li>

<li><a href="#">Comments</a></li>

<li><a href="#">Live Blog</a></li>

<li><a href="#">Logout</a></li>



</ul>


</div>


<div class="col-sm-10">

<br>
<br>
 
<h4>Add a Category</h4>



<div>
  
</div>

<div>
	

<form action="categories.php" method="post">
	


<div class="form-group">
	
<input type="text" name="login-username" placeholder="Enter the name" class="form-control">

<div>
	

	 
</div>


</div>


<button type="submit" class="btn-success btn-block" name="login-button">Add a Category</button>

</form>

<br>

</div>


<div> 
	
<div class="table-responsive">	
<table class="table table-striped">
	

<tr>
	

<th>S.No</th>
<th>Date Time</th>
<th>Category Name</th>
<th>Creator Name</th>


</tr>


<?php


$ViewQuery = 'SELECT * FROM category ORDER BY date_time desc';

$Execute = mysqli_query($con,$ViewQuery);

$SrNo = 0;

while($Datarows = mysqli_fetch_array($Execute))
{


  $id = $Datarows['id'];

  $dateTime = $Datarows['date_time'];

  $name = $Datarows['name'];

  $creatorName = $Datarows['creator_name'];

  $SrNo++;










?>

<tr>
	

	<td><?php echo $SrNo; ?></td>

	<td><?php echo $dateTime; ?></td>

	<td><?php echo $name; ?></td>

	<td><?php echo $creatorName; ?></td>



</tr>


<?php } ?>
</table>

</div>





</div>
 

 







</div>



</div>







</div>






<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>	
</body>
</html>