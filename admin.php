<?php 
require 'dbsetings.php';
$articl = R::dispense( 'articl' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php 
		if(!R::testConnection()){
			exit("error");
		};
	?>
	<div class="container">
		<form action="addPost.php" method="post">
			<input type="text" id="disabledTextInput" class="form-control" placeholder="Введіть посилання на картинку" name="img">
			 <input type="text" id="disabledTextInput" class="form-control" placeholder="Тема статті" name="anons">
			 <input type="text" id="disabledTextInput" class="form-control" placeholder="Текст статті" name="text_message">
			 <button type="submit" class="btn btn-primary">Відправити</button>
		</form>
	</div>
</body>
</html>