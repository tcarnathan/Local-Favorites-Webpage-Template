<?php



?>

	
<?php
	$blockNameSpace = $_GET['id'];
	$linkpointer = $_GET['id'];
	$dir = '../images';
	$files1 = scandir($dir);	
#	print_r($files1);
	$pointer = 'phpmyadmin.png';

	if(file_exists("../indexconfig.txt")){
#		echo("it exist");
		$configfile = file_get_contents('../indexconfig.txt');
		$blockInfo = json_decode($configfile,true);
#		echo($configfile);
#		echo($blockInfo);
	}
	if(file_exists('settings.php')){
		include('settings.php');
	}


	// iterate variables
	for ($num = 1; $num <= 28; $num++) {
		foreach($blockInfo['variables']['link'.$num] as $variable){
			$variableList[] = $variable['variable'];
			if(!isset(${$variable['variable']})){
				${$variable['variable']} = $variable['default'];
			}
			if(${$variable['variable']}=== true){
				${$variable['variable']} = "true";
			}
			if(${$variable['variable']}=== false){
				${$variable['variable']} = "false";
			}


	}}	
	


#	echo 'test2';
?>

<select name="Image">
    <?php foreach ($files1 as $files2): ?>
        <option value="<?php echo $files2; ?>" <?php echo ($files2 == $pointer) ? 'selected' : '' ?>>
            <?php echo $files2; ?>
        </option>
    <?php endforeach; ?>
</select>









<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Link Setup'?></title>
		<style>
			.inputSet{
				font-weight: bold;
				margin: 20px;
				margin-left: 20px;
				font-size:20px;
			}
			#main2{
			font-size:30px;
			color:white;
			font-weight: bold;
			text-align: center;
			max-width: 1500px;
			width: 100%;
			margin-right: auto;
			margin-left: auto;
			padding-left: 5px;
			padding-right: 5px;
			margin-bottom:10px;
			border: 1px solid white;
			background-color: #0015BF;
		}
		</style>
	</head>
	<body bgcolor=rgb(#5F1000)>
		<div id="main2">

			<div class="textDiv">

				<h1>Settings for <?php echo ($linkpointer)?> on the  Settings <?php echo ($blockInfo['name'])?> page</h1></br>

				<form method="post" action="blockSave.php" id='blockSettingsForm'>
					<div style="text-align:left;font-size:1.2em;font-weight:bold;font-variant:small-caps">
						Version: <?php echo number_format($blockInfo['version'],1,".","")?>
					</div>
					<?php
						for ($ehh = 1; $ehh <= 28; $ehh++) {

							foreach($blockInfo['variables']['link'.$ehh] as $variable){
#								echo "<br>";

#								echo $variable['desc']."<br>";
								$varLength = strlen(${$variable['variable']});

								if($varLength<45){
									$varLength = 50;
									$varLength = 50;
								}
								if($varLength>120){
									$varLength = 120;
								}
								if(${$variable['variable']}=="true"){
									echo "<select hidden name='".$variable['variable']."' class='button inputSet'><option value='true' selected>True</option><option value='false'>False</option></select>";
									
								}
								else if(${$variable['variable']}=="false"){
									echo "<select hidden name='".$variable['variable']."' class='button inputSet'><option value='true'>True</option><option value='false' selected>False</option></select>";
								}

								
								else{
									echo "<input type='hidden' name='".$variable['variable']."' value='".${$variable['variable']}."' class='button2 inputSet' size=".$varLength.">";
								}
						}
							

}
						foreach($blockInfo['variables'][$linkpointer] as $variable){
							echo "<br>";

							echo $variable['desc']."<br>";
							$varLength = strlen(${$variable['variable']});

							if($varLength<45){
								$varLength = 50;
								$varLength = 50;
							}
							if($varLength>120){
								$varLength = 120;
							}
							if(${$variable['variable']}=="true"){
								echo "<select name='".$variable['variable']."' class='button inputSet'><option value='true' selected>True</option><option value='false'>False</option></select>";
							}
							else if(${$variable['variable']}=="false"){
								echo "<select name='".$variable['variable']."' class='button inputSet'><option value='true'>True</option><option value='false' selected>False</option></select>";
							}
							else if($variable['desc']=="image"){ 

							
							

#							echo "<select name=".$variable['variable']."'";
							echo "<select name='".$variable['variable']."' class='button inputSet'>"; ?>
									<?php foreach ($files1 as $files2): ?>
										<option value="<?php echo $files2; ?>" <?php echo ($files2 == ${$variable['variable']}) ? 'selected' : '' ?>>
											<?php echo $files2; ?>
										</option>
									<?php endforeach; ?>
								</select>
								
								
								
							<?php }
							
							else{
#								echo $variable['desc']."<br>";

#								echo $blockInfo['dropdown'];
								echo "<input name='".$variable['variable']."' value='".${$variable['variable']}."' class='button2 inputSet' size=".$varLength.">";
							}
						}

					?>
					
					<input type="hidden" name="id" value='<?php echo $blockNameSpace?>'> 
					<input type="hidden" name="parameters" value='<?php echo implode(',',$variableList)?>'>
					<input type="hidden" name="version" value='<?php echo $blockInfo['version']?>'>
					<br><br>
					<div style="width:100%;text-align:center">
						<input type="submit" value="Save Settings" class="button2">
					</div>
					<br><br>
				</form>
			</div>
		</div>

		<?php 
			if($enableKeyboard){
		?>
				<script src="<?php echo $pageURL.$path?>scripts/mousetrap.min.js"></script>
				<script>
					Mousetrap.bind(['alt+s'], function(e) {
						$("#blockSettingsForm").submit();
					});
				</script>
		<?php
			}
		?>
	</body>
</html>


