<?php

	


	$blockNameSpace = $_POST['id'];
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

	file_put_contents('settings.php',$string);

	if(file_exists('settings.php')){
		echo "<script>alert('Settings saved.');document.location = 'setup.php';</script>";
	}
	else{
		echo "<script>alert('Settings could not be saved! Please check that the block folder has correct permissions to write the settings file.');document.location = 'blockSetup.php';</script>";
	}
	
?>
