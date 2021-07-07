<?php
session_start();
if (!isset($_SESSION["oa_id"])) {
	//echo "Nincs itt semmi keresnivalód ! ";
	header('location:index.php');
} else {
?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php include '../contents/links.php'; ?>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<title>Admin Felület</title>
	</head>

	<body>
		<?php include '../contents/AdminNavbar.php'; ?>
		<div class="container p-3 text-center">
			<h1 class="p-5 text-center">Hilihalihalihó ez itt az admin felület</h1>
			<img src="media/csaby.gif" width="400" />
		</div>
	</body>

	</html>
<?php
}
?>