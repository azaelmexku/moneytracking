<h2>Editar Cuentas</h2>

<form action="<?php echo APP_URL."/accounts/edit"; ?>"
	method="POST">
	<input type= "hidden" name="id" value = "<?php echo $account["id"]; ?>">
	<p>
		<label for="name">Name</label>
		<input type="text" name="name" value = "<?php echo $account["name"]; ?>">
	</p>
	
	<p>
		<input type="submit" >
	</p>
</form>