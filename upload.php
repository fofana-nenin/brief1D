
 <?php
 include('connexion.php');
 // Vérifier si le fichier image est une image réelle ou une fausse image.
if(isset($_POST["submit"])) {
 $id_pub=$_POST['id_pub'];
 $nom_pub=addslashes($_POST['nom_pub']);
 $type_pub=addslashes($_POST['type_pub']);
 $msg=addslashes($_POST['msg']);
 $date_pub=$_POST['date_pub'];
 $repertoire = "upload/";
 $chemindufichier = $repertoire . basename($_FILES["img_pub"]["name"]);
 $uploadOk = 1;
 $extension = strtolower(pathinfo($chemindufichier,PATHINFO_EXTENSION));
 $check = getimagesize($_FILES["img_pub"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  // Check file size
 if ($_FILES["img_pub"]["size"] > 60000) {
   echo "Désolé, ton image est trop large.";
   $uploadOk = 0;
  }
  // Vérifier si $uploadOk est mis à 0 par une erreur.
 if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // si tout est ok, essayez de télécharger le fichier
  } else {
  if (move_uploaded_file($_FILES["img_pub"]["tmp_name"], $chemindufichier)) {
    $sql = "INSERT INTO publication (id_pub, nom_pub, type_pub, msg, img_pub, date_pub)
    VALUES ('$id_pub', '$nom_pub', '$type_pub', '$msg', '$chemindufichier', NOW())";
 }
 
if (mysqli_query($conn, $sql)) {
  echo "succes";
} else {
  echo "error: ". $sql . "<br>" .mysqli_error($conn);;
}
mysqli_close($conn);
}
header('location:index.php');
}
 ?>