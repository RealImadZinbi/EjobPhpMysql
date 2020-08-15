<!DOCTYPE html>
<html>
<head>
	<scriptzz

	<meta charset="utf-8"/>
	<title>downoald file</title>
	<link rel="css/bootstrap.min.css" href="stylesheet"/>
</head>
<body>
	<p><br/></p>
	<div class="container">
		<table class="table-bordered">
			<thead>
				<tr>
					<th>Titre</th>
					<th>Description</th>
					<th>Email</th>
					<th>Nom</th>
					<th>Numero</th>
					<th>Ville</th>
					<th>avatar</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "config.php";
				$stmt = $db->prepare("select * from deposer");
				$stmt -> execute();
				while ($row = $stmt->fetch()) {
					
				}
				?>
				<tr>
					<td><?php echo $row['Titre'] ?></td>
					<td><?php echo $row['Description'] ?></td>
					<td><?php echo $row['Email'] ?></td>
					<td><?php echo $row['Nom'] ?></td>
					<td><?php echo $row['Numero'] ?></td>
					<td><?php echo $row['Ville'] ?></td>
					<td><?php echo $row['avatar'] ?></td>
					<td class="text-center"><a href="downoald.php?id=<?php echo $row['Titre']?>"class="btn btn-primary">Downoald</a></td>
				</tr>
				<?php
			
			?>
			</tbody>
		</table>
	</div>
</body>
</html>>