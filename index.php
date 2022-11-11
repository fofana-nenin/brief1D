
  
	 <!--galerie image-->
   <?php
   include('menu.php');
  include("affichage.php");
  ?>
  <div class="load wrap text-center">
    <a href="#" class="btn btn-primary"style="width: 1400px;heigth: 50px;background-color:white; color:black;font-size:25px;border:2px solid #008518;">Voir plus</a>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.gallery').slice(0,10).show();
        $('.btn').on('click',function(){
            $('.gallery:hidden').slice(0,10).slideDown('slow');
            if($('.gallery:hidden').length==0 ){
              $(this).fadeOut('slow');
            }     

            return false;
        });
    });
</script>
<?php
?>
