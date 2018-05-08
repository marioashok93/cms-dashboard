<?php include('includes/db.php');

include('includes/sessions.php');

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


<li class="active"><a href="addnewPost.php">Add new Post</a></li>


<li><a href="categories.php">Categories</a></li>

<li><a href="#">Comments</a></li>

<li><a href="#">Live Blog</a></li>

<li><a href="#">Logout</a></li>



</ul>


</div>


<div class="col-sm-10">

<br>
<br>
 
<h4>Add new Post</h4>



<div>
  
</div>

<div>
	

<form action="categories.php" method="post" enctype="multipart/form-data">
	


<div class="form-group">
	
<input type="text" name="login-title" placeholder="Title" class="form-control">

</div>


<div class="form-group">
	
<input type="text" name="login-category" placeholder="Category" class="form-control">

</div>

<select name="login-select" id="categorySelect" class="form-control">




<?php


$ViewQuery = 'SELECT * FROM category ORDER BY date_time desc';

$Execute = mysqli_query($con,$ViewQuery);



while($Datarows = mysqli_fetch_array($Execute))
{


  $id = $Datarows['id'];


  $name = $Datarows['name'];


  










?>	

<option ><?php echo $name ?></option>

<?php  }     ?>


</select>	

	 
</div>

<br>


<div class="form-group">
	
<input type="File" name="login-image" placeholder="Image" class="form-control">

</div>

<div class="form-group">
	
<label for="textarea">Post:</label>	
 <textarea name="login-textarea" id="textarea" cols="30" rows="10" class="form-control"></textarea>

</div>




</div>



<br>
<br>


<button type="submit" class="btn-success btn-block" name="login-button">Add new Post</button>

</form>

<br>

</div>


<div> 
	
<div class="table-responsive">	
<table class="table table-striped">
	
 




 
 

</div>





</div>
 

 







</div>



</div>







</div>






<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>	
</body>
</html>