<?php
	session_start();
	include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	
		
	
			
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Live</title>
<link href="css/slider.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<link rel="stylesheet" type="text/css" href="css/styles.css" />

<script language="javascript" type="text/javascript">

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="subpage">

<div id="main_wrapper">
	<div id="main_header">
    	<div id="site_title"><h1>Live</a></h1></div>
        
        <div id="header_right">
            <div id="main_search">
                <form action="products.php" method="get" name="search_form">
                  <input type="text" value="Search" name="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="main_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="shoppingcart.php">Cart</a></li>
            <li><a class="selected" href="checkout.php">Checkout</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of menu -->
    
    <div class="cleaner h20"></div>
    <div id="main_top"></div>
    <div id="main">
    	
        <div id="sidebar">
            <h3>Categories</h3>
            <ul class="sidebar_menu">
                <li><a href="index.php?cat=Phone">Phone</a></li>				
                <li><a href="index.php?cat=Tools">Tools</a></li>
                <li><a href="index.php?cat=Fashion">Fashion</a></li>
		</ul>
        </div> <!-- END of sidebar -->
       
        
        <div id="content">
       		<h2>Checkout</h2>
            <form action="myfunctions2.php" method="post">
            <h5 ><strong>BILLING DETAILS</strong></h5>
            <P>MPESA PAYBILL: 22022</P>
            <div class="col col_13 checkout">
				Enter your full name:
                <input type="text"  name="fullname" style="width:300px;"  />
                Address:
                <input type="text"  name="address" style="width:300px;"  />
                City:
                <input type="text"  name="city" style="width:300px;"  />
                phone:
                <input type="text"  name="phone" style="width:300px;"  />
            </div>
            
            <div class="col col_13 checkout">
            	E-MAIL
				<input type="text"  name="email" style="width:300px;"  />
				MPESA-confirmation code
				<br />
                <input type="text"  name="mpesa_code" style="width:300px;"  />
				Product
				<br />
                <input type="text"  name="product" style="width:300px;"  />
				Quantity
				<br />
                <input type="text"  name="quantity" style="width:300px;"  />
				Unit Cost
				<br />
                <input type="text"  name="unitcost" style="width:300px;"  />
				Totals
				<br />
                <input type="text"  name="total" style="width:300px;"  />
                 Order<br />
                <input type="submit" value="Order"  style="width:50px;"  />
                
            </div>
            </form>
            
               
            <div class="cleaner h50"></div>
            <h3>Shopping Cart</h3>
            <h4>TOTAL: <strong>ksh <?php echo $_SESSION['checkoutCartTotal']; ?></strong></h4>
          
               
		</div> <!-- end of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="main_footer">   
        <div class="cleaner h40"></div>
		<center>
			Copyright © 2017 Live
		</center>
    </div> <!-- END of footer -->   
   
</div>



</body>
</html>