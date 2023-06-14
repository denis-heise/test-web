<?php

$tmp_name = $_FILES['img']['tmp_name'];

if (is_uploaded_file($tmp_name)) {
    $path = getcwd() . DIRECTORY_SEPARATOR . 'img';
    $name = $path . DIRECTORY_SEPARATOR . $_FILES['img']['name'];
	
	$allowed = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
	$detected = exif_imagetype($_FILES['img']['tmp_name']);

	if (!in_array($detected, $allowed)) {
		header('Location: index.php?result=err_notimg');
		die;
	};	

	if (file_exists($name)) {
		header('Location: index.php?result=err_exists');
		die;
	};

    $success = move_uploaded_file($tmp_name, $name);

    if ($success) {        
        header('Location: index.php?result=success');		
    } else {
        header('Location: index.php?result=err_upload');
    };    
} else {
	header('Location: index.php?result=err_empty');
	die;
};
