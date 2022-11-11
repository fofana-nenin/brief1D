<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<style type="text/css">

</style>
<body>
<?php

    $lastid=$_POST['lastid'];
    $sql = "SELECT * FROM publication ORDER BY id_pub DESC LIMIT 10";
    $result = $conn->query($sql);
    if (isset($_POST['lastid'])){
        while($rows = $result->fetch_assoc()) {


?>
<div class="gallery">
 <a href="arriereplan.php?id=<?php echo $rows['id_pub']?>">
 <img class="contenant0" src="<?= $rows["img_pub"]; ?>" width="265px;" height="200px ">
 <p class="overlay" >265px x 200 - jpg<br> nenin.com</p>
  </a>
 
  <div style="text-align: center;" >
       <div  class="nom_pub"><?php echo $rows['nom_pub'];?></div>
       <div class="date_pub">publié le <?php echo  $rows['date_pub'];?></div>
  </div>
</div>
<?php
// $lastid=$rows['id_pub'];
}
}
?>
</body>
</html>
