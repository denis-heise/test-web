<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<div>
			<h1>Фотогалерея</h1>
			<div class="images-list">
			<?php
				$directory = "./img";   
				$allowed_types=array("jpg", "png", "gif");
				$file_parts = array();
				$ext="";
				$title="";

				$dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
				while ($file = readdir($dir_handle))  {
					if($file == "." || $file == "..") continue; 
					$file_parts = explode(".", $file);   
					$ext = strtolower(array_pop($file_parts)); 

					if(in_array($ext, $allowed_types)) {
						echo '<div>
								<img src="'.$directory.'/'.$file.'" title="'.$file.'" />
							</div>';
					};
				};
				closedir($dir_handle); 
			?>
			</div>		
		</div>

		<form method="post" action="upload.php" enctype="multipart/form-data">        
			<input type="file" name="img">
			<button type="submit">Загрузить</button>
		</form>

		<div class="result">
			<?php
				switch ($_GET['result']) {
					case 'success':
						echo "Изображение успешно добавлено.";
						break;
					case 'err_exists':
						echo "Изображение с таким именем уже существует.";
						break;
					case 'err_upload':
						echo "Не удалось загрузить.";
						break;
					case 'err_notimg':
						echo "Разрешена загрузка только изображений.";
						break;
					case 'err_empty':
						echo "Изображение не выбрано.";
						break;
				};
			?>
		</div>
	</div>
</body>
</html>