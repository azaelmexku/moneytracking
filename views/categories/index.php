<h2>Categorias</h2>

<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Action</th>
		</tr>

	<?php foreach ($categories as $categorie): ?>
	<tr>
		<td><?php echo $categorie["categories"]["id"]; ?></td>
		<td><?php echo $categorie["categories"]["name"]; ?></td>
		<td>
			<a href="<?php echo APP_URL."/categories/edit/".$categorie["categories"]["id"]; ?>">Edit</a>
			<a href="<?php echo APP_URL."/categories/delete/".$categorie["categories"]["id"]; ?>">Delete</a>

		</td>
	</tr>
	<?php endforeach; ?>

	</table>
	
</div>