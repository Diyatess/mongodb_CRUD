<?php


session_start();


require 'config.php';


if (isset($_GET['id'])) {
   $dets = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}


if(isset($_POST['submit'])){


   $collection->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
       ['$set' => ['plantname' => $_POST['plantname'], 'description' => $_POST['description'],'type' => $_POST['type'],'price'=> $_POST['price']]]
   );


   $_SESSION['success'] = "plats details updated successfully";
   header("Location: index.php");
}


?>



<html>
<head>
</head>
<body>

   <h1>Create Plant</h1>

   <form method="POST">
         <strong>Plantname:</strong>  
         <input type="text" name="plantname" value="<?php echo $dets->plantname; ?>" required=""  placeholder="plantname">  <br><br>
         <strong>Desription:</strong>  
         <input type="text" name="desription"  value="<?php echo $dets->desription; ?>" placeholder="desription" placeholder="desription">  <br><br>
         <strong>Type:</strong>  
         <input type="text" name="type" value="<?php echo $dets->type; ?>" required=""  placeholder="Type"> <br><br>
         <strong>Price:</strong>  
         <input type="text" name="price" value="<?php echo $dets->price; ?>" required=""  placeholder="Price"> <br><br>
         <button type="submit" name="submit" >Submit</button>  
      
<a href="index.php" >Back</a>

</body>
</html>