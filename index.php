<?php  
   session_start();  
?>  
<!DOCTYPE html>  
<html>  
<head>  
   <title> CRUD Operation </title>  
</head>  
<body>  
  
  

  
<?php  
  
   if(isset($_SESSION['success'])){  
      echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";  
   }  
  
?>  
  <h1>Plants Details</h1>
<table border="1">  
   <tr>  
      <th>Plantname</th>  
      <th>Description</th>
      <th>Type</th>
      <th>Price</th>
      <th>Action</th>  
   </tr>  
   <?php  
  
      require 'config.php';  
  
      $det = $collection->find([]);  
  
      foreach($det as $dets) {  
         echo "<tr>";  
         echo "<td>".$dets->plantname."</td>";  
         echo "<td>".$dets->desription."</td>";
         echo "<td>".$dets->type."</td>";  
         echo "<td>".$dets->price."</td>";  
         echo "<td>";  
         echo "<a href='edit.php?id=".$dets->_id."'>Edit</a> <br>";  
         echo "<a href='delete.php?id=".$dets->_id."' >Delete</a>";  
         echo "</td>";  
         echo "</tr>";  
      };  
  
   ?>  
</table>  
</div>  
<a href="create.php" c>Add Plant</a>  
</body>  
</html>  