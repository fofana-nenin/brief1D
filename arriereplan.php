
<?php
 include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a44a0b7112.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
 .gallery{
    width: 250px;
    height: 250px;
    border:2px solid #008518;
    border-radius: 50px;
    /* align-items: center; */
    margin-top: 130px;
    margin-left: 20%;
 } 
 .contenant0{
    width: 170px;
    height: 170px;
    margin-top: 40px;
    margin-left: 16%;
    box-shadow:inset;
    /* border-color: ;    */
 }
 .type_pub{
    color:#008518;
    position:absolute;
    margin-top:-24%;
    margin-left: 20%;
    font-size:50px;
 }
 .nom_pub{
color: #3551EC;
margin-left: 50%;
font-size:18px;
margin-top:-260px;
 }
 .msg{
color: #000000;
margin-left: 50%;
font-size:15px;
position: absolute;
/* background-color: red; */
width: 500px;
/* height:500px; */
 }
 .date_pub{
    color: #596CE5;
    margin-left: 50%;
    margin-top:50px;
    position: absolute;
  } 
 
</style>
<body>
<?php
  include('connexion.php');
//   include('menu.php');
  $id=$_GET['id'];
  $sql = "SELECT * FROM publication WHERE id_pub=$id";
  $result = $conn->query($sql);
  $rows = $result->fetch_assoc();
?>
     <div class="gallery">
        <img class="contenant0" src="<?= $rows["img_pub"];?>" width="120px;" height="150px" >
     </div>
    <div class="type_pub"><?php echo $rows['type_pub'];?></div>
    <div class="nom_pub"><?php echo $rows['nom_pub'];?></div>
    <div class="msg"><?php echo $rows['msg'];?></div>
    <div class="date_pub"> publié le <?php echo  $rows['date_pub'];?></div>
    <?php
   mysqli_close($conn);
   ?> 
 
  <?php
  
  include('liken.php');
  include('commentaire.php');
  ?>
</body>
</html>