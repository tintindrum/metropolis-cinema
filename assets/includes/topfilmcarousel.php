<div class="containercat">

  <div class="catitre">
    <h2>Les meilleurs films</h2>
  </div>

  <?php include("../app/traitement/traitementrankfilm.php") ?>
 
  <?php foreach($dbclassements as $dbclassement){?>
    <div class="mySlides">
          <img src="../assets/media/images/film/<?php echo $dbclassement['image_film']?>.png" style="width:30%">
          <div class="infofilm_slides" data-aos="zoom-in-left" data-aos-offset="100"
      			data-aos-duration="1100">
              <h3 class="titrefilm_slides"><?php echo $dbclassement['nom_film']; ?></h3>
              <p class="textfilm_slides"><?php echo $dbclassement['resume_film']?></p>
                 <div class="notefilm_slides">
                   <h4>Durée du film : <?php echo $dbclassement['duree_film']?></h4>
                   <h4>Classements : <span class="notespan"><?php echo $dbclassement['note_film']?></span></h4>
                 </div>
                <div class="btn-film">
                <a href="../../public/pagefilm.php?id=<?php echo $dbclassement['id_film'];?>">Voir le film</a>
               </div>
          </div>
    </div>
<?php }?>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Thumbnail images -->

  
    <div class="row">
        <?php foreach($dbclassements as $dbclassement){?>
            <div class="column">
            <img class="demo cursor" src="../assets/media/images/film/<?php echo $dbclassement['image_film']?>.png" style="width:100%" onclick="currentSlide(1)" >
            </div>
        <?php }?>
    </div>