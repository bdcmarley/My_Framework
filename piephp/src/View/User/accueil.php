<div id="accueil" >
	   <h2>Accueil</h2>
	   <h3>Update</h3>
	   <form id="formulaire" method="post" action="/piephp/accueil">
		   <div class="row">
			   <div class="col">
				   <label for="lastemail" class="connect1">Ancien mail : </label>
				   <input id="lastemail" type="email" name="lastemail" class="form-control" />
				   <span id="error_pseudo"></span>
			   </div>
			   <div class="col">
				   <label for="email" class="connect1">Nouveau mail : </label>
				   <input id="email" type="email" name="email" class="form-control" />
				   <span id="error_pseudo"></span>
			   </div>
			   <div class="col">
				   <label for="emailc" class="connect1">Confirme mail : </label>
				   <input id="emailc" type="email" name="emailc" class="form-control" />
				   <span id="error_pseudo"></span>
			   </div>
			   <div class="col">
				   <label for="lastpasse" class="connect1">Ancien mot de passe : </label>
				   <input id="lastpasse" type="password" name="lastpasse" class="form-control"/>
				   <span id="error_mdp"></span>
			   </div>
			   <div class="col">
				   <label for="passe1" class="connect1">Nouveau mot de passe : </label>
				   <input id="passe1" type="password" name="passe1" class="form-control"/>
				   <span id="error_mdp"></span>
			   </div>
			   <div class="col">
				   <label for="passe2" class="connect1">Confirme mot de passe : </label>
				   <input id="passe2" type="password" name="passe2" class="form-control"/>
				   <span id="error_mdp"></span>
			   </div>
		   </div>
		   <input id="bouton_connect" type="submit" value="update" name="valide" />
		   <!-- <input id="bouton_connect" type="submit" value="delete" name="valide" /> -->
	   </form>
	   <script src="connexion.js"></script>
   </div>
