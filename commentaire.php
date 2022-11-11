


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a44a0b7112.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style type="text/css">
    
#commentaire{
    /* background-color:red; */
    border:solid #596CE5;
    width: 600px;
    height: 80px;
    border-radius: 20px;
    margin-left:-70px;
    margin-top: 100px; 
}
 #button{
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #596CE5;
     border: none; 
} 
.comment{
    margin-left:4%;
    Padding:100px;
    
}
</style>
<body>
    <?php
    $id=$_GET['id'];
    $sql = "SELECT * FROM publication WHERE id_pub=$id";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    ?>
    <div class="comment">
<form action="comment.php" method="post" enctype="multipart/form-data">
    
    <input type="text"  name="commentaire" placeholder=commentaire id="commentaire" style="color:black;" >
    <input type="hidden" name="idpub" value="<?php echo $id ?>">
    <button name=button id="button"><i class="fa-solid fa-comment fa-3x" style="color:white;"></i></button>
</form>
<?php 
 mysqli_close($conn);
 ?> 

</div>  
</body>
</html>





    