<?php 
session_start();
require '../app/db/connDb.php';

if(!isset($_SESSION['login'])) {
    header('location:../index.php');
    
}

/* ADD user */

if (isset($_POST['addrea'])){
    $nom = htmlspecialchars($_POST['nom_rea']);
    $prenom = htmlspecialchars($_POST['prenom_rea']);
    $nation = htmlspecialchars($_POST['nation_rea']);
    $date = htmlspecialchars($_POST['date_rea']);
 


    if (!empty($nom) AND !empty($prenom) AND !empty($nation) AND !empty($date)){
                    $Testfilm = $pdo->query('SELECT id_realisateur FROM realisateurs WHERE nom_realisateur = "'.$nom.'"');
                    if($Testfilm->rowcount() < 1){
                        $pdo->query('INSERT INTO realisateurs VALUES (NULL, "'.$nom.'", "'.$prenom.'", "'.$nation.'", "'.$date.'")');
                        header("location:../../admin/panelrealisateurs.php");
                        $_SESSION['success']="Vous êtes bien inscrit !";

                    }else $return ="Votre adresse email est déjà utilisée.";
    }else $return = "Un ou plusieurs champs est manquant.";
} 



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
   <link rel="stylesheet" href="../assets/styles/admin.css">
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

<!-- panel admin -->

<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Panel <b>Réalisateurs</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Réalisateurs</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>ID realisateur</th>
                        <th>Nom realisateur</th>
                        <th>Prénom realisateur</th>
                        <th>Nation realisateur</th>
						<th>Date realisateur</th>
					</tr>
				</thead>
				<tbody>
                <?php 
                include '../app/db/connDb.php';
                $sqlrealisateurs = 'SELECT * FROM realisateurs ORDER BY id_realisateur DESC';
                $requetedatarealisateurs = $pdo->query($sqlrealisateurs);	
                $dbdatarealisateurs = $requetedatarealisateurs->fetchAll();
                foreach ( $dbdatarealisateurs as $dbdatarealisateur){ ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php echo $dbdatarealisateur['id_realisateur']?></td>
						<td><?php echo $dbdatarealisateur['nom_realisateur']?></td>
						<td><?php echo $dbdatarealisateur['prenom_realisateur']?></td>
                        <td><?php echo $dbdatarealisateur['nation_realisateur']?></td>
						<td><?php echo $dbdatarealisateur['date_realisateur']?></td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
                    <?php } ?>
					
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Réalisateurs</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                <div class="form-group">
						<label>Nom</label>
						<input type="text" class="form-control" name="nom_rea" required>
					</div>
                    <div class="form-group">
						<label>Prénom</label>
						<input type="text" class="form-control" name="prenom_rea" required>
					</div>
					<div class="form-group">
						<label>Nation</label>
						<textarea class="form-control" name="nation_rea" required></textarea>
					</div>
                    <div class="form-group">
						<label>Date (2022-03-24 09:28:04)</label>
						<input type="timestamp" class="form-control" name="date_rea" required>
					</div>
                
                    <div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add" name="addrea">
				    </div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Modifier films</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nom</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Date de sortie</label>
						<input type="calender" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Résumer</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Note</label>
						<input type="text" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Images</label>
						<input type="text" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Vidéo</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete user</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
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
<!--         <script src="../assets/js/jquery.backstretch.min.js"></script>
 -->        <script src="../assets/js/wow.min.js"></script>
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
