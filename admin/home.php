<?php 
session_start();
if(!isset($_SESSION['login'])) {
    header('location:../index.php');    
}
if ($_SESSION['role'] == 2) {



?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/media/images/icon-m.png">

   <!--  <link rel="stylesheet" href="../assets/styles/accueil.css"> -->
   <link rel="stylesheet" href="../assets/styles/navbarre.css"> 
   <link rel="stylesheet" href="../assets/styles/adminhome.css">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <link rel="stylesheet" href="../assets/styles/avfooter.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../assets/js/modernizr.custom.63321.js"></script>
    
    <title>Accueil - Movie Player</title>
</head>
    
<body>
    

<?php include("../assets/includes/navbarreadmin.php") ?>

<!-- panel home admin -->


<div class="flex-container">
  <div class="flex-item flex-item-1">
	  <p>Users</p> 
	  <a href="paneluser.php" class="btn btn-dark">Voir le panel</a>
	</div>
  <div class="flex-item flex-item-2">
	<p>Ajouter</p>
	<a href="paneluser.php" class="btn btn-dark">Voir le panel</a> 
	</div>
  <div class="flex-item flex-item-3">
	<p>Supprimer</p>
	<a href="paneluser.php" class="btn btn-dark">Voir le panel</a>
	</div>
  <div class="flex-item flex-item-4">
	<p>Modifier</p>
	<a href="paneluser.php" class="btn btn-dark">Voir le panel</a>
	</div>

</div>

<div class="flex-container">
	<div class="flex-item flex-item-5">
		<p>Films</p>
		<a href="panelfilms.php" class="btn btn-dark">Voir le panel</a>
	</div>
	<div class="flex-item flex-item-6">
		<p>Acteurs</p>
		<a href="panelacteurs.php" class="btn btn-dark">Voir le panel</a>
	</div>
	<div class="flex-item flex-item-7">
		<p>Réalisateurs</p>
		<a href="panelrealisateurs.php" class="btn btn-dark">Voir le panel</a>
	</div>
	<div class="flex-item flex-item-8">
		<p>Producteurs</p>
		<a href="panelproducteurs.php" class="btn btn-dark">Voir le panel</a>
	</div>
</div>





<!-- JS -->

        <!-- AOS library -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
            AOS.init();
        </script>

        <script src="../assets/js/caroussel.js" type="text/javascript"></script>
        <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/js/script.js" type="text/javascript"></script>
        <script src="../assets/js/carouselcategories.js"></script>
        <script src="../assets/js/script.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


        <!-- js -->
        <script src="../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
		<script src="../assets/js/admin.js"></script>


		<script src="../assets/js/jquery.catslider.js"></script>
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>

        <!-- AOS library -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
            AOS.init();
            </script>

    </body>
</html>

<?php }else header('location:../accueil.php');   ?> 

