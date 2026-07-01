
<?php   



	$pagename = $_GET['pagename'];	

	if($pagename=="index"){

		$settingsdir = '../';
		$imagedir = '../images/';
		$returndir = '../index.php';


		}
	else{

		$settingsdir = "../pages/".$pagename."/";
		$imagedir = '../images/';
		$returndir = '../pages/'.$pagename.'/'.$pagename.'.php';
		}
	$pageid = $settingsdir;

	include($pageid.$pagename."settings.php");
?>

<style>
		#designerbox{
			font-variant:small-caps;

			font-weight: bold;

			max-width: 250px;

			width: 100%;

			margin-right: auto;

			margin-left: auto;

			padding-left: 5px;

			padding-right: 5px;

			margin-bottom:10px;

			border: 1px solid white;

			background-color: #0015BF;
			

			
		}
		
		#links{

			font-variant:small-caps;

			font-weight: bold;

			

			max-width: 250px;

			width: 100%;

			margin-right: auto;

			margin-left: auto;

			padding-left: 5px;

			padding-right: 5px;

			margin-bottom:10px;

			border: 1px solid white;

			background-color: #0015BF;

		}	


		#spann{

			
			font-size: 20px;
			color: white;
			text-align: center;
			text-transform: capitalize;
			font-weight: bold;

			word-wrap: break-word;

			max-width: 230px;

			width: 100%;

			margin-right: auto;

			margin-left: auto;

			padding-left: 5px;

			padding-right: 5px;

			margin-bottom:10px;



			background-color: #0015BF;

		}			
		
		
		 

#topp{

			
			font-size: 70px;
			color: white;
			font-weight: bold;
			text-align: center;
			text-transform: capitalize;
			max-width: 930px;
			width: 100%;
			margin-right: auto;
			margin-left: auto;
			padding-left: 5px;
			padding-right: 5px;
			margin-bottom:10px;
			border: 2px solid white;
			background-color: #0015BF;



</style>



<div style="width: 2300">
<html><body bgcolor=<?php echo $color29b?>>



<br> 


<br>
<?php	if($title29 == ""){
			echo '<h1 id=topp> Editor For '.$pagename.'</h1>'; 
			}
		else{
			echo '<h1 id=topp> Editor For '.$title29.'</h1>'; 
		}
		?>


<br>

<br> <!-- Row 1 -->

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
	<!-- Link 1 -->

	<div id="links" class="sterrpointer">
	<a href="<?php echo 'setup.php?id=link1&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image1 ?>" width="250" height="150" border="0" alt="<?php echo $txt1 ?>" /></a> 
			<span id="spann" style='font-variant:small-caps'>"<?php echo $link1 ?>"</span>

			
		</div>	</td>
		
		

    <td>		<div id="links" class="sterrpointer">
	<!-- Link 2 -->
	<a href="<?php echo 'setup.php?id=link2&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image2 ?>" width="250" height="150" border="0" alt="<?php echo $txt2 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link2 ?>"</span>

			
		</div>	</td>
		
		
		
    <td>				<div id="links" class="sterrpointer">
	<!-- Link 3 -->
	<a href="<?php echo 'setup.php?id=link3&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image3 ?>" width="250" height="150" border="0" alt="<?php echo $txt3 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link3 ?>"</span>

			
		</div></td>
		
		
		
		
		    <td>				<div id="links" class="sterrpointer">
			<!-- Link 4 -->
	<a href="<?php echo 'setup.php?id=link4&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image4 ?>" width="250" height="150" border="0" alt="<?php echo $txt4 ?>" /></a> 

			
			<span id="spann" style='font-variant:small-caps'>"<?php echo $link4 ?>"</span>

			
		</div></td>
		
		
		
		
		    <td>				<div id="links" class="sterrpointer">
			<!-- Link 5 -->
	<a href="<?php echo 'setup.php?id=link5&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image5 ?>" width="250" height="150" border="0" alt="<?php echo $txt5 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link5 ?>"</span>

			
		</div></td>
		
				    <td>				<div id="links" class="sterrpointer">
			<!-- Link 6 -->
	<a href="<?php echo 'setup.php?id=link6&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image6 ?>" width="250" height="150" border="0" alt="<?php echo $txt6 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link6 ?>"</span>

			
		</div></td>
				    <td>				<div id="links" class="sterrpointer">
			<!-- Link 7 -->
	<a href="<?php echo 'setup.php?id=link7&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image7 ?>" width="250" height="150" border="0" alt="<?php echo $txt7 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link7 ?>"</span>

			
		</div></td>
		
		
		
  </tr>
  <br>
  
  <!-- Row 2 -->
  <tr>
	<td>

	<div id="links" class="sterrpointer">
  	<!-- Link 8 -->	
	<a href="<?php echo 'setup.php?id=link8&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image8 ?>" width="250" height="150" border="0" alt="<?php echo $txt8 ?>" /></a> 
			<span id="spann" style='font-variant:small-caps'>"<?php echo $link8 ?>"</span>

			
		</div>	</td>
		
		

    <td>		<div id="links" class="sterrpointer">
	<!-- Link 9 -->
	<a href="<?php echo 'setup.php?id=link9&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image9 ?>" width="250" height="150" border="0" alt="<?php echo $txt9 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link9 ?>"</span>

			
		</div>	</td>
		
		
		
    <td>				<div id="links" class="sterrpointer">
	<!-- Link 10 -->
	<a href="<?php echo 'setup.php?id=link10&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image10 ?>" width="250" height="150" border="0" alt="<?php echo $txt10 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link10 ?>"</span>

			
		</div></td>
		
		
		
		
		    <td>				<div id="links" class="sterrpointer">
			<!-- Link 11 -->
	<a href="<?php echo 'setup.php?id=link11&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image11 ?>" width="250" height="150" border="0" alt="<?php echo $txt11 ?>" /></a>

			
			<span id="spann" style='font-variant:small-caps'>"<?php echo $link11 ?>"</span>

			
		</div></td>
		
		
		
		
		    <td>				<div id="links" class="sterrpointer">
			<!-- Link 12 -->
	<a href="<?php echo 'setup.php?id=link12&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image12 ?>" width="250" height="150" border="0" alt="<?php echo $txt12 ?>" /></a>  

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link12 ?>"</span>

			
		</div></td>
		
				    <td>				<div id="links" class="sterrpointer">
			<!-- Link 13 -->
	<a href="<?php echo 'setup.php?id=link13&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image13 ?>" width="250" height="150" border="0" alt="<?php echo $txt13 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link13 ?>"</span>

			
		</div></td>
				    <td>				<div id="links" class="sterrpointer">
			<!-- Link 14 -->
	<a href="<?php echo 'setup.php?id=link14&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image14 ?>" width="250" height="150" border="0" alt="<?php echo $txt14 ?>" /></a> 


			<span id="spann" style='font-variant:small-caps'>"<?php echo $link14 ?>"</span>

			
		</div></td>
		
		
	
  </tr>
  
  
   <!-- Row 3 -->
  <tr>
	<td>

	<div id="links" class="sterrpointer">
	<!-- Link 15 -->
	<a href="<?php echo 'setup.php?id=link15&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image15 ?>" width="250" height="150" border="0" alt="<?php echo $txt15 ?>" /></a> 
			<span id="spann" style='font-variant:small-caps'>"<?php echo $link15 ?>"</span>

			
		</div>	</td>
		
		

    <td>		<div id="links" class="sterrpointer">
	<!-- Link 16 -->
	<a href="<?php echo 'setup.php?id=link16&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image16 ?>" width="250" height="150" border="0" alt="<?php echo $txt16 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link16 ?>"</span>

			
		</div>	</td>
		
		
		
    <td>				<div id="links" class="sterrpointer">
	<!-- Link 17 -->
	<a href="<?php echo 'setup.php?id=link17&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image17 ?>" width="250" height="150" border="0" alt="<?php echo $txt17 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link17 ?>"</span>

			
		</div></td>
		
		
		
		
		    <td>				<div id="links" class="sterrpointer">
	<!-- Link 18 -->
	<a href="<?php echo 'setup.php?id=link18&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image18 ?>" width="250" height="150" border="0" alt="<?php echo $txt18 ?>" /></a>

			
			<span id="spann" style='font-variant:small-caps'>"<?php echo $link18 ?>"</span>

			
		</div></td>
		
		
		
		
		    <td>				<div id="links" class="sterrpointer">
	<!-- Link 19 -->
	<a href="<?php echo 'setup.php?id=link19&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image19 ?>" width="250" height="150" border="0" alt="<?php echo $txt19 ?>" /></a>  

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link19 ?>"</span>

			
		</div></td>
		
				    <td>				<div id="links" class="sterrpointer">

	<!-- Link 20 -->
	<a href="<?php echo 'setup.php?id=link20&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image20 ?>" width="250" height="150" border="0" alt="<?php echo $txt20 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link20 ?>"</span>

			
		</div></td>
				    <td>				<div id="links" class="sterrpointer">
	<!-- Link 21 -->
	<a href="<?php echo 'setup.php?id=link21&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image21 ?>" width="250" height="150" border="0" alt="<?php echo $txt21 ?>" /></a> 


			<span id="spann" style='font-variant:small-caps'>"<?php echo $link21 ?>"</span>

			
		</div></td>
		
		
	
  </tr>
  
  
    <!-- Row 4 -->
  <tr>
	<td>

	<div id="links" class="sterrpointer">
	<!-- Link 22-->
	<a href="<?php echo 'setup.php?id=link22&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image22?>" width="250" height="150" border="0" alt="<?php echo $txt22?>" /></a> 
			<span id="spann" style='font-variant:small-caps'>"<?php echo $link22 ?>"</span>

			
		</div>	</td>
		
		

    <td>		<div id="links" class="sterrpointer">
	<!-- Link 23 -->
	<a href="<?php echo 'setup.php?id=link23&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image23 ?>" width="250" height="150" border="0" alt="<?php echo $txt23 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link23 ?>"</span>

			
		</div>	</td>
		
		
		
    <td>				<div id="links" class="sterrpointer">
	<!-- Link 24 -->
	<a href="<?php echo 'setup.php?id=link24&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image24 ?>" width="250" height="150" border="0" alt="<?php echo $txt24 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link24 ?>"</span>

			
		</div></td>
		
		
		
		
		    <td>				<div id="links" class="sterrpointer">
	<!-- Link 25 -->
	<a href="<?php echo 'setup.php?id=link25&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image25 ?>" width="250" height="150" border="0" alt="<?php echo $txt25 ?>" /></a>

			
			<span id="spann" style='font-variant:small-caps'>"<?php echo $link25 ?>"</span>

			
		</div></td>
		
		
		
		
		    <td>				<div id="links" class="sterrpointer">
	<!-- Link 26 -->
	<a href="<?php echo 'setup.php?id=link26&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image26 ?>" width="250" height="150" border="0" alt="<?php echo $txt26 ?>" /></a>  

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link26 ?>"</span>

			
		</div></td>
		
				    <td>				<div id="links" class="sterrpointer">

	<!-- Link 27 -->
	<a href="<?php echo 'setup.php?id=link27&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image27 ?>" width="250" height="150" border="0" alt="<?php echo $txt27 ?>" /></a> 

			<span id="spann" style='font-variant:small-caps'>"<?php echo $link27 ?>"</span>

			
		</div></td>
				    <td>				<div id="links" class="sterrpointer">
	<!-- Link 28 -->
	<a href="<?php echo 'setup.php?id=link28&pagename='.$pagename ?>"><img src="<?php echo $imagedir.$image28 ?>" width="250" height="150" border="0" alt="<?php echo $txt28 ?>" /></a> 


			<span id="spann" style='font-variant:small-caps'>"<?php echo $link28 ?>"</span>

			
		</div></td>
		
		
	
  </tr>
  <tr>
  <td>
  <div id="links" class="sterrpointer">
	<!-- Return -->
	<a href="<?php echo $returndir ?>"><img src="<?php echo $imagedir.'return.png'?>" width="250" height="150" border="0" alt="return" /></a> 
	

  </td>
    <td>
  </td>
    <td>
  </td>
    <td>
	<div id="designerbox" class="sterrpointer">
	<!-- Page Design Settings -->
	<a href="<?php echo 'setup.php?id=link29&pagename='.$pagename ?>"><img src="../images/design.png" width="250" height="150" border="0" alt="design" /></a> 

	<br>
			<span id="spann" style='font-variant:small-caps'><?php echo 'Page Color: <br>'.$color29a ?></span><br>
			<span id="spann" style='font-variant:small-caps'><?php echo 'This Edit Page Color:<br> '.$color29b ?></span><br>
			<span id="spann" style='font-variant:small-caps'><?php echo 'Tile Width: <br>'.$width29 ?></span><br>
			<span id="spann" style='font-variant:small-caps'><?php echo 'Tile Height: <br>'.$height29 ?></span><br>
			<span id="spann" style='font-variant:small-caps'><?php echo 'Page Title Override: <br>'.$title29 ?></span><br>
	
	
	
  </td>
    <td>
  </td>
    <td>
  </td>
    <td>
  </td>
    </tr>
	
	
	  <tr>
  <td>
  </td>
    <td>
  </td>
    <td>
  </td>
    <td>




			

			
		</div>
	
	
  </td>
    <td>
  </td>
    <td>
  </td>
    <td>
  </td>
    </tr>
</table>



<br>  

<br>

<br><br>




last update 6/27/26

</body>
</html>
</div> 