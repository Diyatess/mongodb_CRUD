<?php  
  
session_start();  
  
if(isset($_POST['submit'])){  
  
   require 'config.php';  
  
   $insertOneResult = $collection->insertOne([  
       'plantname' => $_POST['plantname'],  
       'desription' => $_POST['desription'],  
       'type' => $_POST['type'],
       'price' => $_POST['price'],  
   ]);  
  
   $_SESSION['success'] = "Creation of plants is successful";  
   header("Location: index.php");  
}  
  
?>  
  
<!DOCTYPE html>  
<html>  
<head>  
   <title> CRUD Operation  </title>  
<body>  
  

   <h1>Create Plants</h1>  
 
  
   <form method="POST">  
         <strong>Plantname:</strong>  
         <input type="text" name="plantname" required=""  placeholder="plantname">  <br><br>
         <strong>Desription:</strong>  
         <input type="text" name="desription" placeholder="desription" placeholder="desription">  <br><br>
         <strong>Type:</strong>  
         <input type="text" name="type" required=""  placeholder="Type"> <br><br>
         <strong>Price:</strong>  
         <input type="text" name="price" required=""  placeholder="Price"> <br><br>
         <button type="submit" name="submit" >Submit</button>  
     
   </form>  <br>
   <a href="index.php" >Back</a>  
</body>  
</html>  