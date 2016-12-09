<h2>Cuentas</h2>



<div class="table-responsive">
	<table class="table table-striped" >
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Action</th>
		</tr>

	<?php foreach ($accounts as $account): ?>
	<tr>
		<td><?php echo $account["accounts"]["user_id"]; ?></td>
		<td><?php echo $account["accounts"]["name"]; ?></td>
		<td>
			<a href="<?php echo APP_URL."/accounts/edit/".$account["accounts"]["id"]; ?>">Edit</a>
			<a href="<?php echo APP_URL."/accounts/delete/".$account["accounts"]["id"]; ?>">Delete</a>

		</td>
	</tr>
	<?php endforeach; ?>

	</table>
	
</div>