<?php
include("connexion.php");
if(isset($_POST['request'])){
    $request=$_POST['request'];
    $query="SELECT*FROM publication WHERE type_pub='$request'";
    $result=mysqli_query($conn,$query);
    while($rows = $result->fetch_assoc()) {

?>
<div class="gallery">
 <a href="arriereplan.php?id=<?php echo $rows['id_pub']?>">
 <img class="contenant0" src="<?= $rows["img_pub"]; ?>" width="265px;" height="200px ">
 <p class="overlay">265px x 200 - jpg<br> nenin.com</p>
  </a>
 
  <center>
  <div  class="nom_pub"><?php echo $rows['nom_pub'];?></div>
  <div class="date_pub">publié le <?php echo  $rows['date_pub'];?></div>
  </center>
</div>
<?php
// $lastid=$rows['id_pub'];
  }
} 
?>