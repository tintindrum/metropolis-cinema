<?php 
session_start();
require '../app/db/connDb.php';


if(!isset($_SESSION['login'])) {
    header('location:../index.php');
    
}

/* ADD user */

if (isset($_POST['adduser'])){
    $email = htmlspecialchars($_POST['mail_us']);
    $mdp = htmlspecialchars($_POST['mdp_us']);
    $mdp2 = htmlspecialchars($_POST['mdpconf_us']);
    $nom = htmlspecialchars($_POST['nom_us']);
    $prenom = htmlspecialchars($_POST['prenom_us']);

    if (!empty($email) AND !empty($mdp) AND !empty($mdp2) AND !empty($nom) AND !empty($prenom)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($mdp == $mdp2) {
                if(strlen($nom) <= 50){
                    $TestEmail = $pdo->query('SELECT id_user FROM users WHERE mail_user = "'.$email.'"');
                    if($TestEmail->rowcount() < 1){
                       /*  $mdp = PasswordHash($mdp); B_CRYPT */
                        $pdo->query('INSERT INTO users VALUES (NULL, "'.$email.'", "'.$mdp.'", "'.$nom.'", "'.$prenom.'", 1)');
                        header("location:../../admin/paneluser.php");
                        $_SESSION['success']="Vous êtes bien inscrit !";

                    }else $return ="Votre adresse email est déjà utilisée.";
                }else $return = "Votre nom dépasse 50 caractères.";
            }else $return = "Les deux mots de passe ne correspondent pas.";
        }else $return = "L'email est invalide !";
    }else $return = "Un ou plusieurs champs est manquant.";
} 

/* DELETE USERS */



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
						<h2>Panel <b>Users</b></h2>
					</div>
                    <div  class="success" name="msgsucces"><?php if(isset($_POST['inscrire']) OR isset($_SESSION['success'])) echo $_SESSION['success']; unset($_SESSION['success']);?></div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add User</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
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
                        <th>Nom</th>
						<th>Prénom</th>
						<th>Email</th>
                        <th>ID_user</th>
						<th>Rôle</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                <?php 
                include '../app/db/connDb.php';
                $sql = 'SELECT * FROM users ORDER BY id_user DESC';
                $requetedatausers = $pdo->query($sql);	
                $dbdatausers = $requetedatausers->fetchAll();
                foreach ( $dbdatausers as $dbdatauser){ ?>
                <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?php echo $dbdatauser['nom_user']?></td>
						<td><?php echo $dbdatauser['prenom_user']?></td>
						<td><?php echo $dbdatauser['mail_user']?></td>
						<td><?php echo $dbdatauser['id_user']?></td>
                        <td><?php echo $dbdatauser['id_role']?></td>
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
<?php require_once "../app/db/connDb.php"; ?>

<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="">
				<div class="modal-header">						
					<h4 class="modal-title">Add User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
                <div class="erreur" name="msgnotif"><?php if(isset($_POST['inscrire']) AND isset($return)) echo $return; ?></div>
                    
				<div class="modal-body">					
					<div class="form-group">
						<label>Nom</label>
						<input type="text" class="form-control" name="nom_us" required>
					</div>
                    <div class="form-group">
						<label>Prénom</label>
						<input type="text" class="form-control" name="prenom_us" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="mail_us" required>
					</div>
					<div class="form-group">
						<label>Mot de passe</label>
						<input type="password" class="form-control" name="mdp_us" required></input>
					</div>
                    <div class="form-group">
						<label>Confirmez votre Mot de passe</label>
						<input type="password" class="form-control" name="mdpconf_us" required></input>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add" name="adduser">
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
					<h4 class="modal-title">Edit Users</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                    <div class="form-group">
						<label>Nom</label>
						<input type="text" class="form-control" required>
					</div>					
					<div class="form-group">
						<label>Prénom</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Mot de passe</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Rôle</label>
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
