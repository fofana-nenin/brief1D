<?php
include('connexion.php');
//$con=mysqli_connect('localhost','root','','bonne_boof');
// if($con->connect_error){
//   exit('Could not connect');
// }
$id = (int)$_GET['id'];
$sql="SELECT*FROM publication WHERE id_pub='$id' ";
$res=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a44a0b7112.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
  .container{
    margin-left:23%;
    margin-top:86px;
  }
  
  .liker{
    text-decoration:none;
    background-color:rgb(41, 164, 176);
    color:white;
    width: 50px;
    height: 50px;
    border-radius:50px;
    padding: 15px;
    position:absolute;
    margin-left:-30px;
    margin-top:125px;
  }
  #like{
    /* transform:rotate(180deg); */
    margin-left:25px;
    margin-top:120px;
    position:absolute;
    background-color:white;
  }
  .disliker{
    text-decoration:none;
    color:white;
    background-color:rgb(234, 54, 54);
    width: 50px;
    height: 50px;
    border-radius:50px;
    padding: 15px;
    position:absolute;
    margin-left:-177px;
    margin-top:125px;
  }
  #dislike{
    transform:rotate(180deg);
    margin-left:-225px;
    margin-top:130px;
    position:absolute;
    background-color:white;
  }
</style>
<body>
<div class="container">
  <?php 
  while($row=mysqli_fetch_assoc($res)){
  ?>
  <div class="row main_box">
    <!-- like -->
      <div class="col-sm-3">
        <a href="javascript:void(0)" class="liker">
        <span class="like" id="like_loop_<?php echo $row['id_pub']?>">
        <?php echo $row['like_count'];?></span>
        </a>
        <span id='like'class="fa-regular fa-thumbs-up fa-3x"style="color: rgb(41, 164, 176);"
        onclick="like_update('<?php echo $row['id_pub']?>')"></span> 
      </div>

      <!-- dislike -->
      <div class="col-sm-3">
        
        <span id='dislike' class="fa-regular fa-thumbs-up fa-3x"style="color: rgb(234, 54, 54);"
        onclick="dislike_update('<?php echo $row['id_pub']?>')"></span>
        <a href="javascript:void(0)" class="disliker">
        <span id="dislike_loop_<?php echo $row['id_pub'] ?>">
        <?php echo $row['dislike_count'];?></span>
        </a>
      </div>
      
    </div>
    <?php
    } 
  
    ?>
  </div> 
</div>
<script>
// like
    function like_update(id){
			jQuery.ajax({
				url:'update_count.php',
				type:'post',
				data:'type=like&id='+id,
				success:function(result){
					var current_count=jQuery('#like_loop_'+id).html();
					current_count++;
					jQuery('#like_loop_'+id).html(current_count);
			
				}
			});
		}	

// dislike
    function dislike_update(id){
      var cur_count=jQuery('#dislike_loop_'+id).html();
      cur_count++;
      jQuery('#dislike_loop_'+id).html(cur_count);
      jQuery.ajax({
url:'update_count.php',
type:'post',
data:'type=dislike&id='+id,
success:function(result){
}
      });
    }
    
  </script>
</body>
</html>
<!-- h1 style="background-color: rgb(234, 54, 54);width:50px;heigth: 50px;border-radius :50%;margin-top:10px;margin-left:120px;"> -->
<!-- id='dislike'style="color: rgb(234, 54, 54);" -->
<!-- transform:rotate(180deg); -->