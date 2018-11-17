<table class="table table-bordered">
	<tr>
		<th>#ID</th>
		<th>Category Name</th>
		<th>Producs List</th>
	</tr>
	<?php
		foreach ($produc as $row) {
	?>
	<tr>
		<td><?php echo $row->id; ?></td>
		<td><?php echo $row->name; ?></td>
		<td><?php echo $row->products; ?></td>
	</tr>
	<?php
		}
	?>
</table>