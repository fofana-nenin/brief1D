
    
<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>welikefood</title>
		<link rel="stylesheet" type="text/css" href="style_css.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--link icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--script src="https://kit.fontawesome.com/a44a0b7112.js" crossorigin="anonymous"></script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
		<style type="text/css">

/* la petite image sur l'image */
.img_plus {
  
  opacity: 0;
  transition: .5s ease;  
  text-align: right;
  height:40px;
  width:40px;
}
/*caroussel*/
.swiper {
        width: 100%;
        height:  20%;

      }

     .swiper-slide {
        
        font-size: 18px;
        background: #fff;
        margin: 5px;
        padding: 10px;
        display: flex;
        border-radius: 70px;   
        border: 2px solid skyblue;
        width: 140px;
        height: 80px;      
        /* Center slide text vertically */
        /*display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;*/
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
/*fin caroussel*/

.div_text_scroll {
			font-size: 14px;
			width: 100px;
			height: 50px;
			margin-left: 6px;
			margin-bottom: -8px;
		}
		.img_scroll {
			
			width: 50px;
			height: 50px;
			border-radius: 50%;
			margin-left: 0px;
		}
    nav{
      max-width: 950px;
    }
	
		head {
			max-width: 1400px;
		}
		body {
			max-width: 1400px;
		}

		</style>
</head>
<body>
  <?php
// include("connexion.php");
  ?>
	<div style="display: flex;align-items: center;">
    <img width="300" height="140"  src="images/re.png">
    <input id="rech" type="text" name="rech">
      <i class="fa fa-microphone" style="font: size 200px; color: rgb(41, 164, 176); margin-left: -110px;margin-bottom: -5px;;"></i>
      &nbsp;&nbsp; &nbsp;&nbsp;<i class="fa fa-camera" style="font: size 200px; color: rgb(41, 164, 176); margin-left: 2px;margin-bottom: -5px;"></i>
      &nbsp;&nbsp; &nbsp;&nbsp;<i class="fa fa-search" style="font: size 200px; color: rgb(41, 164, 176); margin-left: 3px;margin-bottom: -5px;"></i>
 		<!-- <img style="margin-left: -110px;margin-bottom: -5px;" src="images/micro.png"width="20" height="30">
 		<img style="margin-left: 2px;margin-bottom: -5px;" src="images/camera.png" width="20" height="25">
 		<img style="margin-left: 3px;margin-bottom: -4px;" src="images/loupe.png" width="20" height="27"> -->
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <input type="button" name="connexion" id="connexion" value="connexion" >
 		<!-- &nbsp;<img style="margin-bottom: -5px;" src="images/parametre.png" width="20" height="25"> -->
     &nbsp;&nbsp; <i class="fa fa-bars" style="font: size 200px; color:rgb(73, 69, 69);"></i>
	</div><br>
	<!--div de la 2eme ligne-->
	<div style="display: flex;align-items: center;"class="monter">
		<nav>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<a id="tout" href="#">TOUT</a>
		<a id="imag" href="#">IMAGES</a>
		<a id="actu" href="#">ACTUALIT&#201;S</a>
		<a id="videos" href="#">VID&#201;OS</a>
		<a id="cartes" href="#">CARTES</a>
    &nbsp;&nbsp; <a id="publication" href="publication.php"target="_blank" style color="black">PUBLICATION</a>
		<!--<div class="animation start-home"></div>-->
		</nav>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 
	 <div style="display: flex;align-items: center;">
    type de publication&nbsp;	 	 
	 <select name="fetchval" id="fetchval" style="border-style: none;font-weight: bold;">
   <option value="">Choisir</option>	
   <option value="Conseil">Conseil</option>
	 	<option value="Recette">Recette</option>
	 	<option value="Restaurant">Restaurant</option>
     <option value="Retour">Retour d'expérience</option>
	 </select>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filtre&nbsp;&nbsp; <i class="fa fa-filter" style="margin-bottom: -7px;"></i>
   <!-- <img style="margin-bottom: -7px;" src="images/filtre.png"> -->
   <script>
      $(document).ready(function(){
        $("#fetchval").on('change',function(){
          var value=$(this).val();
        
          $.ajax({
            url:"fetch.php",
            type:"POST",
            data:'request='+value,
            // beforeSend:function(){
            //   $(".herver").html("<span>...</span>");
            // },
            success:function(data){
              $(".herver").html(data);
            }
          });
        });
      });

    </script>
	 	</div>
	</div>
	<!--fin div de la 2eme ligne-->
	<!--trait de separation-->
	 <div>
	 	<hr style="margin-bottom: 10px;margin-top: 1px;">	 	
	 </div>
   
     <div class="swiper mySwiper">
     
      <div class="swiper-wrapper">
     <!-- debut 1ère scroll -->
    <div class="swiper-slide">
      <img class="img_scroll" src="images/th.jpg" alt="image">
      <div class="div_text_scroll">Nourriture <br>  <b>Chat</b></div>
    </div>&nbsp;&nbsp;
  

    <div class="swiper-slide">
      <img class="img_scroll" src="images/bonne_nourriture.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Bonne
      <br>  <b>Nourriture</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_fast_food.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Fast Food</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/italie_nourriture.jpg" alt="Cinque Terre">
      <div sclass="div_text_scroll"><b>Italie
      </b> 
      <br>  Nourriture</div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_monde.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Du Monde</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_italie.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>italienne</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_chien.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chien</b></div>
    </div>
    <!-- fin 1ère scroll -->
    <!--2ème scroll-->
    
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image1.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chat</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image2.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Bonne
      <br>  <b>Nourriture</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image3.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Fast Food</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image4.jpg" alt="Cinque Terre">
      <div class="div_text_scroll"><b>Italie
      </b> 
      <br>  Nourriture</div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image5.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Du Monde</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image6.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>italienne</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image7.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chien</b></div>
    </div>
    <!--fin 2eme scroll-->

    <!--3ème scroll-->
    
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image8.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chat</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image9.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Bonne
      <br>  <b>Nourriture</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image10.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Fast Food</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/italie_nourriture.jpg" alt="Cinque Terre">
      <div class="div_text_scroll"><b>Italie
      </b> 
      <br>  Nourriture</div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_monde.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Du Monde</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_italie.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>italienne</b></div>
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_chien.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chien</b></div>
    </div>
     <!--fin 3eme scroll-->

        
      </div>
  

      <!-- les fleches -->
      <div class="swiper-button-next" style="height: 80px;width: 50px; color: black; background-color: white;font-weight: bold;margin-top: -40px;margin-right: 0;"></div>
      <div class="swiper-button-prev" style="height: 80px;width: 50px;color: black; background-color: white;font-weight: bold;margin-top: -40px;"></div>
      <!--<div class="swiper-pagination"></div>-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 7,
        spaceBetween: 1,
        slidesPerGroup: 7,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <!-- <script type="text/javascript">
      $(document).ready(function(){
        $("#fetchval").on('change',function(){
          var value=$(this).val();
          $.ajax({
            url:"fetch.php",
            type:"POST",
            data:'request=' +value;
            beforeSend:function(){
              $(".herver").html("<span>...</span>");
            },
            // success:function(){
            //   $(".container").html("data");
            // }
          });
        });
      }); -->

    <!-- </script>
    </body>
    </html> -->