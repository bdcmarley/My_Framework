 	<div id="inscription" >
		   <h2>Inscription</h2>
		   <form id="formulaire" method="post" action="/piephp/register">
			   <div class="row">
			   <div class="col">
				   <label for="email" class="connect1">Email : </label>
				   <input id="email" type="email" name="email" class="form-control" />
				   <span id="error_pseudo"></span>
			   </div>
			   <div class="col">
				   <label for="passe1" class="connect1">Mot de passe : </label>
				   <input id="passe1" type="passe1" name="passe1" class="form-control"/>
				   <span id="error_mdp"></span>
			   </div>
			   <div class="col">
				   <label for="passe2" class="connect1">Confirme mot de passe : </label>
				   <input id="passe2" type="passe2" name="passe2" class="form-control"/>
				   <span id="error_mdp"></span>
			   </div>
		   </div>
			   <input id="bouton_connect" type="submit" value="Connexion" name="valide" />
		   </form>
		   <script src="connexion.js"></script>
	   </div>
