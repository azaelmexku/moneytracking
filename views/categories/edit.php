<h2>Editar Categorias</h2>

<form action="<?php echo APP_URL."/categories/edit"; ?>"
	method="POST">
	<input type= "hidden" name="id" value = "<?php echo $categorie["id"]; ?>">
	<p>
		<label for="name">Name</label>
		<input type="text" name="name" value = "<?php echo $categorie["name"]; ?>">
	</p>
	
	<p>
		<input type="submit" >
	</p>
</form>