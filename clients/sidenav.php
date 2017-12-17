<?php
  include '../config/config.php';
  $sql = "SELECT title FROM categories";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_num_rows($result); 
?>

<div class="side">
<div class="side-nav">
  <ul>

<?php
  if(mysqli_num_rows($result) > 0){
    	while($row = mysqli_fetch_assoc($result)){
?>    		

		<li><a><?php echo $row["title"]; ?></a></li>
	  
<?php  
  } 
}
   mysqli_close($conn);
?>	  

	  </ul>
	</div>
</div>



