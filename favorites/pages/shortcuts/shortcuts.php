<?php  

#The code is now the same for both the home index and for any extra pages. All you have to change is the following
# $pagename change this to the name of the page (note this has to be the exact same as folder name and the first part of both the settings.php and config.txt files You can always change the 
#human readable name when visiting the settings page using the user interface 
# example if the folder is named shortcuts the $pagename will ahve to be 'shortcuts' and the file name for settings.php and config.txt will have to be shortcutssettings.php and shortcutsconfig.txt 
# you will also have to edit the $imagepath and editor path see notes below. 
	$tileswide = 7; 
	$pagename = 'shortcuts';
	
	# for image path if it's the home page index the image path should be 'images/'
	# if it's for the "shortcuts" pages it should be '../../images/'
	$imagepath = '../../images/';
	# for editor path if it's the home page index the editor path should be 'settings/'
	# if it's for the "shortcuts" pages it should be '../../settings/'	
	$editorpath = '../../settings/';
	include($pagename."settings.php");
	
	

if($width29 < 100){
	$tilewidth = 100;
}
else{
	$tilewidth = $width29;
}

$titlebar = '';



if($height29 < 100){
	$tileheight = 100;
}
else{
	$tileheight = $height29;

}
$pagewidth = ($tilewidth * $tileswide)+100;

echo '<div style="width: '.$pagewidth.'">';

?>
<head>

<?php	if($title29 == ""){
			echo "<title>wee".$pagename."</title>"; 
			}
		else{
			echo "<title>".$title29."</title>"; 
		}
		?>

<link rel="icon" type="image/x-icon" href="<?php echo $imagepath.$favicon29 ?>">

</head> 
<html><body bgcolor=<?php echo $color29a?>>




<style> 

#topp{

			
			font-size: 70px;
			color: white;
			font-weight: bold;
			text-align: center;
			text-transform: capitalize;
			max-width: 530px;
			width: 100%;
			margin-right: auto;
			margin-left: auto;
			padding-left: 5px;
			padding-right: 5px;
			margin-bottom:10px;
			border: 2px solid white;
			background-color: #0015BF;


</style>
<br>
<?php
if($HeaderEnabled29 == true){
	echo $Header29; 
}
else{
	echo '';
}



?>
<br>
<br>
<?php	if($title29 == ""){
			echo '<h1 id=topp>'.$pagename.'</h1>'; 
			}
		else{
			echo '<h1 id=topp>'.$title29.'</h1>'; 
		}
		?>

<br>


<br>

<br>


<br>

<br> 

<table>
  <tr>
    <td></td>
    <td></td>
    <td></td>
	    <td></td>
    <td></td>
	    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>



<!-- Row 1 -->

<!-- Link 1 -->
<a href="<?php echo $link1 ?>"><img src="<?php echo $imagepath.$image1 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt1 ?>" /></a> 
</td><td>

<!-- Link 2 -->
<a href="<?php echo $link2 ?>"><img src="<?php echo $imagepath.$image2 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt2 ?>" /></a> 
</td><td>
<!-- Link 3 -->
<a href="<?php echo $link3 ?>"><img src="<?php echo $imagepath.$image3 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt3 ?>" /></a> 
</td><td>
<!-- Link 4 -->
<a href="<?php echo $link4 ?>"><img src="<?php echo $imagepath.$image4 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt4 ?>" /></a> 
</td><td>
<!-- Link 5 -->
<a href="<?php echo $link5 ?>"><img src="<?php echo $imagepath.$image5 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt5 ?>" /></a> 
</td><td>
<!-- Link 6 -->
<a href="<?php echo $link6 ?>"><img src="<?php echo $imagepath.$image6 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt6 ?>" /></a> 
</td><td>
<!-- Link 7 -->
<a href="<?php echo $link7 ?>"><img src="<?php echo $imagepath.$image7 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt7 ?>" /></a> 
</td></tr>

<tr>

 <!-- Row 2 -->

<td>

<!-- Link 8 -->
<a href="<?php echo $link8 ?>"><img src="<?php echo $imagepath.$image8 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt8 ?>" /></a> 
</td><td>
<!-- Link 9 -->
<a href="<?php echo $link9 ?>"><img src="<?php echo $imagepath.$image9 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt9 ?>" /></a> 
</td><td>
<!-- Link 10 -->
<a href="<?php echo $link10 ?>"><img src="<?php echo $imagepath.$image10 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt10 ?>" /></a> 
</td><td>
<!-- Link 11 -->
<a href="<?php echo $link11 ?>"><img src="<?php echo $imagepath.$image11 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt11 ?>" /></a>
</td><td>
<!-- Link 12 -->
<a href="<?php echo $link12 ?>"><img src="<?php echo $imagepath.$image12 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt12 ?>" /></a>  
</td><td>
<!-- Link 13 -->
<a href="<?php echo $link13 ?>"><img src="<?php echo $imagepath.$image13 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt13 ?>" /></a> 
</td><td>
<!-- Link 14 -->
<a href="<?php echo $link14 ?>"><img src="<?php echo $imagepath.$image14 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt14 ?>" /></a> 

</td></tr>
<tr><td>

  <!-- Row 3 -->


<!-- Link 15 -->
<a href="<?php echo $link15 ?>"><img src="<?php echo $imagepath.$image15 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt15 ?>" /></a> 
</td><td>
<!-- Link 16 -->
<a href="<?php echo $link16 ?>"><img src="<?php echo $imagepath.$image16 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt16 ?>" /></a> 
</td><td>
<!-- Link 17 -->
<a href="<?php echo $link17 ?>"><img src="<?php echo $imagepath.$image17 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt17 ?>" /></a> 
</td><td>
<!-- Link 18 -->
<a href="<?php echo $link18 ?>"><img src="<?php echo $imagepath.$image18 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt18 ?>" /></a>
</td><td>
<!-- Link 19 -->
<a href="<?php echo $link19 ?>"><img src="<?php echo $imagepath.$image19 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt19 ?>" /></a>  
</td><td>
<!-- Link 20 -->
<a href="<?php echo $link20 ?>"><img src="<?php echo $imagepath.$image20 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt20 ?>" /></a> 
</td><td>
<!-- Link 21 -->
<a href="<?php echo $link21 ?>"><img src="<?php echo $imagepath.$image21 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt21 ?>" /></a> 

</td></tr>

  <!-- Row 4 -->
<tr><td>

<!-- Link 22-->
<a href="<?php echo $link22?>"><img src="<?php echo $imagepath.$image22?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt22?>" /></a> 
</td><td>
<!-- Link 23 -->
<a href="<?php echo $link23 ?>"><img src="<?php echo $imagepath.$image23 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt23 ?>" /></a> 
</td><td>
<!-- Link 24 -->
<a href="<?php echo $link24 ?>"><img src="<?php echo $imagepath.$image24 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt24 ?>" /></a> 
</td><td>
<!-- Link 25 -->
<a href="<?php echo $link25 ?>"><img src="<?php echo $imagepath.$image25 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt25 ?>" /></a>
</td><td>
<!-- Link 26 -->
<a href="<?php echo $link26 ?>"><img src="<?php echo $imagepath.$image26 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt26 ?>" /></a>  
</td><td>
<!-- Link 27 -->
<a href="<?php echo $link27 ?>"><img src="<?php echo $imagepath.$image27 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt27 ?>" /></a> 
</td><td>
<!-- Link 28 -->
<a href="<?php echo $link28 ?>"><img src="<?php echo $imagepath.$image28 ?>" width="<?php echo $tilewidth ?>" height="<?php echo $tileheight ?>" border="0" alt="<?php echo $txt28 ?>" /></a> 

</td></tr></table>

<br><br><br>





<br>



<?php
if($FooterEnabled29 == true){
	echo $Footer29; 
}
else{
	echo '';
}



?>


<!-- Editor  -->
<a href="<?php echo $editorpath ?>editor.php?pagename=<?php echo $pagename ?>"><img src="<?php echo $imagepath ?>edit.png" width="250" height="150" border="0" alt="editor" /></a> 

last update 7/3/2026

</body>
</html>
</div> 