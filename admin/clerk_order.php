<?php
	session_start();
	include("php/connect_to_mysql.php");
	
	
	
	$displayProdCat = "";
	$prodCatCtr = 0;
	if(!empty($_GET['keyword'])){
		$productName = $_GET['keyword'];
		$sqlSelectSearchProduct = mysql_query("select * from tblproduct where prod_name like '$productName%'") or die(mysql_error());
		if(mysql_num_rows($sqlSelectSearchProduct) >= 1){
			while($getRowSearchProduct = mysql_fetch_array($sqlSelectSearchProduct)){
				$prodNo = $getRowSearchProduct["prod_no"];
				$prodId = $getRowSearchProduct["prod_id"];
				$prodName = $getRowSearchProduct["prod_name"];
				$prodPrice = $getRowSearchProduct["prod_price"];
				
				$displayProdCat .= '<div class="col col_14 product_gallery">
				<a href="productdetail.php?prodid='.$prodId.'"><img src="images/product/'.$prodNo.'.jpg" width="170" height="150" /></a>
				<h3>'.$prodName.'</h3>
				<p class="product_price">Php '.$prodPrice.'</p>
				<a href="shoppingcart.php?prodid='.$prodId.'" class="add_to_cart">Add to Cart</a></div>';
			}
		}
	}else{
	$sqlSelectProdCat1 = mysql_query("select * from tblproduct where prod_cat = 'Phone'") or die(mysql_error());
	if(mysql_num_rows($sqlSelectProdCat1) >= 1){
		$displayProdCat .= '<h2>Phone</h2>';
		while($getProdInfo1 = mysql_fetch_array($sqlSelectProdCat1)){
			$prodNo = $getProdInfo1["prod_no"];
			$prodId = $getProdInfo1["prod_id"];
			$prodName = $getProdInfo1["prod_name"];
			$prodPrice = $getProdInfo1["prod_price"];
			$displayProdCat .= '<div class="col col_14 product_gallery">
			<a href="productdetail.php?prodid='.$prodId.'"><img src="images/product/'.$prodNo.'.jpg" width="170" height="150" /></a>
			<h3>'.$prodName.'</h3>
			<p class="product_price">Ksh '.$prodPrice.'</p>
			<a href="shoppingcart.php?prodid='.$prodId.'" class="add_to_cart">Add to Cart</a></div>';
			
			if(++$prodCatCtr == 3)
				break;
		}
		$displayProdCat .= '<a href="index.php?cat=juice" class="more float_r">View all</a><div class="cleaner h50"></div>';
	}
	$sqlSelectProdCat2 = mysql_query("select * from tblproduct where prod_cat = 'junkfood'") or die(mysql_error());
	if(mysql_num_rows($sqlSelectProdCat2) >= 1){
		$displayProdCat .= '<h2>Junk Food</h2>';
		while($getProdInfo1 = mysql_fetch_array($sqlSelectProdCat2)){
			$prodNo = $getProdInfo1["prod_no"];
			$prodId = $getProdInfo1["prod_id"];
			$prodName = $getProdInfo1["prod_name"];
			$prodPrice = $getProdInfo1["prod_price"];
			$displayProdCat .= '<div class="col col_14 product_gallery">
			<a href="productdetail.php?prodid='.$prodId.'"><img src="images/product/'.$prodNo.'.jpg" width="170" height="150" /></a>
			<h3>'.$prodName.'</h3>
			<p class="product_price">Ksh '.$prodPrice.'</p>
			<a href="shoppingcart.php?prodid='.$prodId.'" class="add_to_cart">Add to Cart</a></div>';
			
			if(++$prodCatCtr == 3)
				break;
		}
		$displayProdCat .= '<div class="cleaner"></div><a href="index.php?cat=junkfood" class="more float_r">View all</a><div class="cleaner h50"></div>';
	}
	$sqlSelectProdCat3 = mysql_query("select * from tblproduct where prod_cat = 'dessert sprinkler'") or die(mysql_error());
	if(mysql_num_rows($sqlSelectProdCat3) >= 1){
		$displayProdCat .= '<h2>Dessert Sprinkler</h2>';
		while($getProdInfo1 = mysql_fetch_array($sqlSelectProdCat3)){
			$prodNo = $getProdInfo1["prod_no"];
			$prodId = $getProdInfo1["prod_id"];
			$prodName = $getProdInfo1["prod_name"];
			$prodPrice = $getProdInfo1["prod_price"];
			$displayProdCat .= '<div class="col col_14 product_gallery">
			<a href="productdetail.php?prodid='.$prodId.'"><img src="images/product/'.$prodNo.'.jpg" width="170" height="150" /></a>
			<h3>'.$prodName.'</h3>
			<p class="product_price">Ksh '.$prodPrice.'</p>
			<a href="shoppingcart.php?prodid='.$prodId.'" class="add_to_cart">Add to Cart</a></div>';
			
			if(++$prodCatCtr == 3)
				break;
		}
		$displayProdCat .= '<div class="cleaner"></div><a href="index.php?cat=dessert sprinkler" class="more float_r">View all</a><div class="cleaner h50"></div>';
	}
	}
?>
  
	
	
   
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Tr
ansitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<title>Live - Clerk</title>
</head>
<body id="adminpage">
<div id="main_wrapper">
	<div id="main_header">
		<div id="admin_name"><h1>Welcome <?php echo $_SESSION["name"]; ?></h1></div>
	</div><!-- end of header -->
	<div id="main_menu" class="menu_sel">
		<ul id="menu_icons">
			
			<li><a href="admin_addnew_product.php"><img src="images/Products-icon.png" />
            <p class="selected">Products</p></a></li>
			<li><a href="index.php"><img src="images/logout.png" height="62" />
          <p>Log Out</p></a></li>
		</ul>
        
	</div><!-- end of menu -->
	<div class="cleaner h40"></div>
	<div id="main_top"></div>
	<div id="main_con">
		<div id="sidebar">
			<h3>Manage Product</h3>
			<ul class="sidebar_menu">
				<li><a class="selected" href="#">Add New Product</a></li>
                
								
								
			</ul>
		</div><!-- end of sidebar -->
		<div id="content">
			<h2>Product Information <span style="color: #a11; font-size: 13px; margin-left: 50px;"><span></h2>
	<?php echo $displayProdCat; ?>		
			
                                
                            
		</div><!-- end of content -->
		<div class="cleaner"></div>
	
	<div id="main_footer">
		<div class="cleaner h40"></div>
		<center>
		  Copyright �  2017 Live
		</center>
	</div><!-- end of footer -->
</div>
</body>
</html>