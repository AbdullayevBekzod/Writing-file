<?php
	$msg = "";
	$msgClass = "";

	$name = htmlspecialchars($_POST['name']);
	$surname = htmlspecialchars($_POST['surname']);
	$dataob = htmlspecialchars($_POST['dataob']);
	$gen = htmlspecialchars($_POST['gen']);
	$vil = htmlspecialchars($_POST['vil']);

	if( !empty($name) && !empty($surname) && !empty($dataob) && !empty($gen) && !empty($vil)) {

		$handle = fopen('file.txt', 'a+');

		$content = fread('file.txt', filesize('file.txt'));

		fwrite($handle, $new_content."\n".$content);

		if( !empty($handle)){
			fputs($handle, "$name \n");
			fputs($handle, "$surname \n");
			fputs($handle, "$dataob \n");
			fputs($handle, "$gen \n");
			fputs($handle, $vil);
		}



	} else {
		echo "iltimos barcha bo`limlarni to`ldiring";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="form-group">
				<label>Ismi</label><br>
				<input type="text" class="form-control" name="name" placeholder="ism..." value="">
			</div>
			<div class="form-group">
				<label>Familiyasi</label> <br>
				<input type="text" class="form-control" name="surname" placeholder="familiya..." value="">
			</div>
			<div class="form-group">
				<label>Tug`ilgan yil</label> <br>
				<input type="data" class="form-control" name="dataob" placeholder="calendar..." value="">
			</div>
			<label>Jinsi</label> <br>
			<select class="form-select form-control" name="gen" value="">
				<option value="Erkak">Erkak</option>
				<option value="Ayol">Ayol</option>
				<option value="Aniq emas">Aniq emas</option>
			</select> <br>
			<label>Viloyat</label> <br>
			<select class="form-select form-control" name="vil" value="">
				<option value="Toshkent">Toshkent</option>
				<option value="Farg`ona">Farg`ona</option>
				<option value="Andijon">Andijon</option>
				<option value="Namangan">Namangan</option>
				<option value="Jizzax">Jizzax</option>
			</select>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>


	</div>

	<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>