<?php

	


	$blockNameSpace = $_POST['id'];
	$pagename = $_POST['pagename'];
	$settingsdir = $_POST['settingsdir'];
	$parameters = explode(',',$_POST['parameters']);

	$string = "<?php".PHP_EOL;

	$string .= "// ".$blockNameSpace." settings file" .PHP_EOL;
	$string .= "// Version: ".number_format($_POST['version'],1,".","") .PHP_EOL;
	$string .= "// Created: ".date("Y-m-d H:i:s",time());

	$string .= PHP_EOL;
	$string .= PHP_EOL;

	foreach($parameters as $parameter){
		if(trim($_POST[$parameter])=="true" || trim($_POST[$parameter])=="false"){
			$string .= "$".$parameter." = ".$_POST[$parameter].";".PHP_EOL;
		}
		else{
			$string .= "$".$parameter." = '".$_POST[$parameter]."';".PHP_EOL;
		}
	}

	$string .= PHP_EOL;
	$string .= PHP_EOL;

	file_put_contents($settingsdir,$string);

	if(file_exists($settingsdir)){
		echo "<script>alert('Settings saved.');document.location = 'editor.php?pagename=$pagename';</script>";

	}
	else{
		echo "<script>alert('Settings could not be saved! Please check that the folder has correct permissions to write the settings file.');'editor.php?pagename=$pagename';</script>";
	}
	
?>
