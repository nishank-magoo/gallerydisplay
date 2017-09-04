<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
#caption{
margin-top: 5px;
}
img{
height: 225px;
}
-->
</style>



<?php

include('config.php');
if (!isset($_FILES['image']['tmp_name'])) 
{
	echo "";
	}
else
{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			$caption=$_POST['caption'];
			$productcat =$_POST['cat'];
			$productcolor=$_POST['color'];
			$productmaterial=$_POST['material'];
			$productcost=$_POST['cost'];
			$productofferprice=$_POST['offerprice'];
			
			$save=mysqli_query($bd, "INSERT INTO photos (location, caption, product_cat, product_color, product_material, product_cost, product_offerprice) VALUES ('$location','$caption', '$productcat', '$productcolor', '$productmaterial', '$productcost', '$productofferprice')");
			
			$result = mysqli_query($bd,"SELECT * FROM photos");
			while($row = mysqli_fetch_array($result))
			{

			echo '<div id="imagelist">';
			echo '<p><img src="'.$row['location'].'"></p>';
			echo '<p id="caption">'.$row['caption'].' </p>';
			echo '<p id="cat">'.$row['product_cat'].' </p>';
			echo '<p id="color">'.$row['product_color'].' </p>';
			echo '<p id="material">'.$row['product_material'].' </p>';
			echo '<p id="cost">'.$row['product_cost'].' </p>';
			echo '<p id="offerprice">'.$row['product_offerprice'].' </p>';



			echo '</div>';

			}

			//header("location: index.php");
			exit();					
}
?>
