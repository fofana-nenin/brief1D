
<?php
include('connexion.php');
$sql = "SELECT * FROM publication ORDER BY id_pub DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  //Afficher les données de chaque ligne
  while($rows = $result->fetch_assoc()) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<style type="text/css">
.date_pub{
    font-size: 13px;
    font-family:'Roboto',Helvetica,Sans-Serif;
    
}
div.gallery{
  margin: 7px;
  border: 1px solid #ccc;
  float: left;
  width: 266px;
  border-radius: 10px;
  /* grid-template-columns: repeat(5, 1fr); */
  /* box-shadow:inset 2px 2px 8px ; */
}
div.gallery a{
  text-decoration: none;
}
div.gallery:hover {
  /*border: 1px solid #777;*/
  box-shadow: 2px 2px 8px black;
}
.gallery:hover a {
  text-decoration: underline;
  color: white;
}
.gallery:hover .nom_pub {
  text-decoration: underline;
}
.overlay{
    color:aqua;
    text-align: center;
    font-size: 13px;
    position: relative;
    margin-top:-45px;
    opacity: 0;
    float: center;
}
.over:hover{
  /* box-shadow: inset 0 0 60px 60px gray; */
  opacity: 1;
  /* box-shadow: inset black 10px 10px 10px; */
}
.over:hover .overlay{
  opacity: 1;
  /* box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5); */
}

.contenant0{
  width: 265px;
  height: 260px;
  border-radius: 10px 10px 0 0;
  
}


</style>
<body>

<div class="herver">
   <div class="gallery"style="display:none;">
        <a href="arriereplan.php?id=<?php echo $rows['id_pub']?>">
          <div class="over">
            <img class="contenant0" src="<?= $rows["img_pub"]; ?>">
              <p class="overlay">265px x 200 - jpg<br> nenin.com</p>
              
          </div>
         
        </a>
 
        <div style="text-align: center;" >
          <div  class="nom_pub"><?php echo $rows['nom_pub'];?></div>
          <div class="date_pub">publié le <?php echo  $rows['date_pub'];?></div>
        </div>
    </div>

    <?php
       }
         } else {
      mysqli_close($conn);
      }
    ?>
</div>

</body>
</html>