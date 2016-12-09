<h2>Agregar Cuenta</h2>

<form action="<?php echo APP_URL."/accounts/add"; ?>"
	method="POST">
	<p>
		<label for="user_id">User_id</label>
		<input type="text" name="user_id">
	</p>
	<p>
		<label for="name">Name</label>
		<input type="text" name="name">
	</p>
	
	
	<p>
		<input type="submit" >
	</p>
</form>