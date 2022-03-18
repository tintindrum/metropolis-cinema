<div class="main">
                <div class="catitre">
                    <h2>Catégories</h2>
                </div>
				
				<div id="mi-slider" class="mi-slider">
                <?php include("../app/traitement/traitementcategories.php") ?>

					
                        <ul>
                        <?php foreach($datacategoriesaction as $datacategorieaction){?>
							<li>
								<a href="../../public/pagefilm.php?id_film=<?php echo $datacategorieaction['id_film'];?>"><img src="../assets/media/images/film/<?php echo $datacategorieaction['image_film']?>.png" alt="img1">
									<h4><?php echo $datacategorieaction['nom_film']; ?></h4>
								</a>
							</li>
                        <?php }?>
                        </ul>
                        
						<ul>
                        <?php foreach($datacategoriesaventure as $datacategorieaventure){?>
							<li>
								<a href="../../public/pagefilm.php?id_film=<?php echo $datacategorieaventure['id_film'];?>"><img src="../assets/media/images/film/<?php echo $datacategorieaventure['image_film']?>.png" alt="img1">
									<h4><?php echo $datacategorieaventure['nom_film']; ?></h4>
								</a>
							</li>
                        <?php }?>
                        </ul>


						<ul>
                        <?php foreach($datacategoriescomedie as $datacategoriecomedie){?>
							<li>
								<a href="../../public/pagefilm.php?id_film=<?php echo $datacategoriecomedie['id_film'];?>"><img src="../assets/media/images/film/<?php echo $datacategoriecomedie['image_film']?>.png" alt="img1">
									<h4><?php echo $datacategoriecomedie['nom_film']; ?></h4>
								</a>
							</li>
                        <?php }?>
                        </ul>


						<ul>
                        <?php foreach($datacategoriessciencefiction as $datacategoriesciencefiction){?>
							<li>
								<a href="../../public/pagefilm.php?id_film=<?php echo $datacategoriesciencefiction['id_film'];?>"><img src="../assets/media/images/film/<?php echo $datacategoriesciencefiction['image_film']?>.png" alt="img1">
									<h4><?php echo $datacategoriesciencefiction['nom_film']; ?></h4>
								</a>
							</li>
                        <?php }?>
                        </ul>

						<nav data-aos="zoom-in" data-aos-offset="100"
						data-aos-duration="800">
							<a href="#"><?php echo $datacategorieaction['categorie_film']; ?></a>
							<a href="#"><?php echo $datacategorieaventure['categorie_film']; ?></a>
							<a href="#"><?php echo $datacategoriecomedie['categorie_film']; ?></a>
							<a href="#"><?php echo $datacategoriesciencefiction['categorie_film']; ?></a>
						</nav>
                        </div>
						<a href="pageallfilm.php" class="btncate">Voir plus de films</a>
						</div>
				</div>
		    </div>