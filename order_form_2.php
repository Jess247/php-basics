<!DOCTYPE html> 
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>Form</title>
</head>
<body>
<?php
if (isset($_POST["starter"])) {
	$starter = $_POST["starter"];
	$main = $_POST["main"];
	$dessert = $_POST["dessert"];
	$drinks = $_POST["drinks"];
	$guestStatus = $_POST["guestStatus"];
}
else {
	$starter = "";
	$main = "";
	$dessert = "";
	$drinks = "";
	$guest = "";
}
?>

<h1>Rosies Take away</h1>
<form method = "post">
<fieldset>
<h2>Menu</h2>
<p>
<label for="starter">Starter:</label>
<select id="starter" name="starter">
	<option value="salat"
	<?php if($starter == "salat") {
			echo "selected";
		}?>>Cesar Salad</option>
	<option value="garlicbread"
	<?php if($starter == "garlicbread") {
			echo "selected";
		}?>>Garlic bread</option>
	<option value="olives"
	<?php if($starter == "olives") {
			echo "selected";
		}?>>Olives</option>
</select>
</p>
<p>
<label for="main">Main Dish:</label>
<select id="main" name="main">
	<option value="pizza" 
	<?php if($main == "pizza") {
			echo "selected";
		}?>>Pizza</option> 
	<option value="schnitzel" 
	<?php if($main =="schnitzel") {
			echo "selected";
		}?>>Schnitzel with fries</option>
	<option value="risotto" 
	<?php if($main =="risotto") {
			echo "selected";
		}?>>Risotto</option>
</select>
</p>
<p>
<label for="dessert">Dessert:</label>
<select id="dessert" name="dessert">
	<option value="pudding" 
	<?php if($dessert == "pudding") {
			echo "selected";
		}?>>Pudding</option> 
	<option value="cake" 
	<?php if($dessert == "cake") {
			echo "selected";
		}?>>Cake</option>
	<option value="fruits" 
	<?php if($dessert == "fruits") {
			echo "selected";
		}?>>Ice cream with fruits</option>
</select>
</p>
<p>
<label for="drinks">Drinks:</label>
<select id="drinks" name="drinks">
	<option value="lemonade"
	<?php if($drinks == "lemonade") {
			echo "selected";
		}?>>Lemomade</option> 
	<option value="cola"
	<?php if($drinks == "cola") {
			echo "selected";
		}?>>Coca Cola</option> 
	<option value="juice"
	<?php if($drinks == "juice") {
			echo "selected";
		}?>>Juice</option>
	<option value="coffee"
	<?php if($drinks == "coffee") {
			echo "selected";
		}?>>coffee</option>
	<option value="water"
	<?php if($drinks == "water") {
			echo "selected";
		}?>>Water</option>
	<option value="tea"
	<?php if($drinks == "tea") {
			echo "selected";
		}?>>Tea</option> 
</select>
</p>
</fieldset>	 
<fieldset>
<p>
<input type="radio" id="employee"
	name="guestStatus " value="employee" <?php
	if($guestStatus !="gast") {
		echo "checked";
	}?> />
<label for="employee">Employee</label><br />
<input type="radio" id="guest"
	name="guestStatus " value="guest" <?php
	if($guestStatus =="guest") {
		echo "checked";
	}?> /> 
<label for="employee">guest </label>

</p>
<p>
<input type = "submit" value="order"/>
</p>
</fieldset>
</form>
</body>
</html>