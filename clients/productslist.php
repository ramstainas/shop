<?php
 include '../config/config.php';

 $sql = "SELECT id, title, price, description, cat_id FROM products";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result); 

    if(mysqli_num_rows($result) > 0){
    	while($row = mysqli_fetch_assoc($result)){
    		echo " " . $row["title"] . " " . $row["price"] . " " . $row["cat_id"] . "<br>"; 
    	}
    }

  mysqli_close($conn);


?>