
<?php
// include("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<style type="text/css">
  body{
    /* width: 300px; */
    color:white;
    text-align:center;
    /* display: inline-block;
    background:url("images/Quelques astuces de publicitaires pour tricher avec la nourriture.jpg")no-repeat; */
  }
  /* centrer mon formulaire */
  form.centre{
    width: 600px;
    height: 500px;
    margin-top:50px;
    margin-left:5%;
    /* background-color:red; */
    display: inline-block;
    background:url("images/Quelques astuces de publicitaires pour tricher avec la nourriture.jpg")no-repeat;
  }
    label.lab{
        /* background-color:red; */
        font-size:20px;
        font-family:'Roboto',Helvetica,Sans-Serif;
        align-items:center;
    }
    input.type{
      width: 300px;
      height: 40px;
      border:none;
      border-radius:10px;
      box-shadow: 2px 2px 8px black;
    }
    select.type{
      width: 300px;
      height: 40px;
      border:none;
      border-radius:10px;
      box-shadow: 2px 2px 8px black;
    }
    textarea.type{
      width: 300px;
      height: 40px;
      border:none;
      border-radius:10px;
      box-shadow: 2px 2px 8px black;
    }
    input.sub{
      width: 70px;
      height: 40px;
      border:none;
      background-color:green;
      border-radius:10px;
      box-shadow: 2px 2px 8px black;
    }
    input.file{
      width: 300px;
      height: 40px;
      border:none;
      border-radius:10px;
      box-shadow: 2px 2px 8px black;
    }
 </style>
<body>
<form action="upload.php" class="centre" method="POST" enctype="multipart/form-data">
  <p> 
    <label class="lab" for="titre">Titre de publication</label><br><input type="text" class="type" name="nom_pub">
  </P>
  <P>
    <label class="lab" for="type_pub" >Type de publication</label><br><select type="text"class="type" name="type_pub" >
      <option>Choisir</option>
      <option>restaurant</option>
      <option>recette</option>
      <option>retour d'experience</option>
      <option>conseil</option>
    </select>
  </P>
  <p>
   <label class="lab" for="corps">Message</label><br><textarea type="text" class="type" maxlength="500" name="msg"></textarea>
  </P>
  <P>
   <label class="lab" for="image">Image</label><br><input type="file" class="file" name="img_pub" >
  </P>
   <label for="submit"></label> <input type="submit" class="sub" value="Publier" name="submit">
  </p>
  </form>
    <?php
    // include("affichage.php");
    ?>
    </body>
</html>