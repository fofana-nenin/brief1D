
<?php
include('connexion.php');

if(isset($_POST["button"])){
$idpub=$_POST["idpub"];
$commentaire=$_POST["commentaire"];
 $sql1 = "INSERT INTO commentair (idpub, commentaire)
 VALUES ('$idpub', '$commentaire')";

if (mysqli_query($conn, $sql1)) {
    echo "succes";
  } else {
    echo "error: ". $sql1 . "<br>" .mysqli_error($conn);;
  }
  mysqli_close($conn);
  
  header('location:index.php');
  }

    
?>
    
