<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$pdo = new PDO('sqlite:master.db');

			$statement = $pdo->query("SELECT * FROM ability_list");

			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

			echo "<pre>";
			var_dump($rows);
			echo "</pre>"
		?>
	</body>
</html>