<h1>Inscription</h1>
<div  class="erreur"><?php  echo  $erreur  ?></div>
<form  name="fo"  method="post"  action="">
<input  type="text"  name="nom_user"  placeholder="Nom"  value="<?=  $nom  ?>" /><br/>
<input  type="text"  name="prenom_user"  placeholder="Prénom"  value="<?=  $prenom  ?>" /><br/>
<input  type="text"  name="pseudo_user"  placeholder="Votre Pseudo"  value="<?=  $pseudo  ?>" /><br/>
<input  type="password"  name="mdp_user"  placeholder="Mot de passe" /><br/>
<input  type="password"  name="passconf"  placeholder="Confirmer votre Mot de passe"  /><br/>
<input  type="submit"  name="inscrire"  value="S'inscrire"  />
<a  href="login.php">Deja un compte</a>
</form>