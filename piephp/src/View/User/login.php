<!DOCTYPE html>
<html lang="zx">
	<head>
	</head>
	<body>
		<form action="/piephp/login" method="post" enctype="multipart/form-data">
			<label for="email" >Email : </label>
			<input id="email"  type="text" class="form-control" name="email" />
			<label for="password" >Mot de passe : </label>
			<input id="password"  type="password" name="password" class="form-control" placeholder="Entre 3 et 25 caracteres" />
			<input id="bouton" type="submit" value="Envoyer" name="valide" />
		</form>
	</body>
</html>
