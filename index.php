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

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">

<table border="1">
<tr>
<td>Select Image:</td> 
<td><input type="file" name="image" class="ed"> </td> 
</tr>
<tr>
<td>ProductName</td> 
<td><input name="caption" type="text" class="ed" id="brnu" /></td> 
</tr>
<tr>
<td>ProductCategory </td>
<td><input name="cat" type="text" class="ed" id="brnu" /></td>
</tr>
<tr>
<td>ProductColor</td> 
<td><input name="color" type="text" class="ed" id="brnu" /></td>
</tr>
<tr>
<td>ProductMaterial</td> 
<td><input name="material" type="text" class="ed" id="brnu" /></td>
</tr>
<tr>
<td>ProductCost</td> 
<td><input name="cost" type="text" class="ed" id="brnu" /> </td>
</tr>
<tr>
<td>ProductOfferPrice</td> 
<td><input name="offerprice" type="text" class="ed" id="brnu" /></td>
</tr>
<tr>
<td><input type="submit" name="Submit" value="Upload" id="button1" /></td>
</tr>
 
 </table>

 </form>


<a href="addexec.php"> Display Database </a>

<?php

//include('config.php');
//$result = mysqli_query($bd,"SELECT * FROM photos");
//while($row = mysqli_fetch_array($result))
//{

//echo '<div id="imagelist">';
//echo '<p><img src="'.$row['location'].'"></p>';
//echo '<p id="caption">'.$row['caption'].' </p>';
//echo '<p id="cat">'.$row['product_cat'].' </p>';
//echo '<p id="color">'.$row['product_color'].' </p>';
//echo '<p id="material">'.$row['product_material'].' </p>';
//echo '<p id="cost">'.$row['product_cost'].' </p>';
//echo '<p id="offerprice">'.$row['product_offerprice'].' </p>';



//echo '</div>';

//}
?>
