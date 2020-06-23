<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>TDD</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($data as $key => $value) { ?>
				<td><?php echo $value->tdd; ?></td>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>