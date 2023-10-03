<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<style>
.search-agileinfo input[type="search"] {
    margin-top: 0px;
}

button.search {
    margin-left: -3px;
	margin-top: -4px;
}


</style>  
  
</head>

<body>

<div class="header-top" style="background-color:#2874f0;">
	<div class="container">
		<div class="col-md-6 shop logo-w3">
			<a><img src="images/shop.png"><h1 style="color:white;">FASHIONIST</span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
			  <center> <li class="active"> <a href="login_form.php"><input type="submit" value="Login Menu"></a></li> </center>
				<li><span class="glyphicon glyphicon-earphone"></span></li>
				<li style="color:white;">+12345672343</li>
			</ul>
		</div>
	</div>
</div>
<div class="header-bottom-w3ls" style="background-color:#2874f0;">
	<div class="container">
		<div class="col-md-7">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class=" active"><a href="index.php"><span>Home</span></a></li>	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>Gender wise<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
												<li><a href="women.php"><i class="fa fa-angle-right"></i>Women's Clothing</a></li>
												<li><a href="men.php"><i class="fa fa-angle-right"></i>Men's Clothing</a></li>
												<li><a href="kids.php"> <i class="fa fa-angle-right"></i>Kid's Wear</a></li>
												<li><a href="party.php"><i class="fa fa-angle-right"></i>Party Wear</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="casuals.php"><i class="fa fa-angle-right"></i>Casuals</a></li>
												<li><a href="night.php"><i class="fa fa-angle-right"></i>Night Wear</a></li>
												<li><a href="formals.php"><i class="fa fa-angle-right"></i>Formals</a></li>
												<li><a href="inner.php"><i class="fa fa-angle-right"></i>Inner Wear</a></li>
										
											</ul>						
										</div>
										<div class="col-sm-4 w3l">
											<a href="women.php"><img src="images/gigi.png" class="img-responsive" alt=""></a>
										</div>
										
								 </div>	
								</ul>
						</li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Accessories and Personal Care <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="jewellery.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Jewellery </a></li>
												<li><a href="watches.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Watches</a></li>
												<li><a href="cosmetics.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
												<li><a href="deos.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Perfumes</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4">
											
											<ul class="multi-column-dropdown">
												<li><a href="haircare.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
												<li><a href="shoes.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Shoes</a></li>
												<li><a href="handbags.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Handbags</a></li>
												<li><a href="skincare.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4 w3l">
											<a href="jewellery.php"><img src="images/necklace.png" class="img-responsive" alt=""></a>
										</div>
			
									</div>	
								</ul>
						</li>
						<li><a href="about.php" class="hyper"><span>About</span></a></li>
						<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-4 search-agileinfo">
			<form action="#" method="post" style="background-color:white;">
				<input class="product search" type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div>
		</div>
	</div>
 </div>	

<?php 
require("connection.php");

$id = $_REQUEST['buyid'];

$res = "select * from products where id='$id'";
$result = $con->query($res);

$count = $result->num_rows;

if($count>0)
{
	$row = $result->fetch_assoc();
	?>

<div class="col-md-6" style="padding-left:140px;"> <br>
<img src="<?php echo "admin/pics/". $row['Choose_Image'];?>" style="width:450px; height:450px;">
</div>

<div class="col-md-6"  style="padding-left:80px;"> <br>

<form action="" method="post">
<div class="form-group">
<label> Product_Name </label>
<input class="form-control" value="<?php echo $row['Product_Name'];?>" style="width:250px;">
</div>

 <div class="form-group">
 <label>Price </label>
 <input class="form-group" name="PPRICE" id="PPRICE" value="<?php echo $row['Price'];?>">
 </div>
 
 <div class="form-group">
<label> Quantity </label>
<input class="form-group" name="QTY" id="QTY" onKeyUp="multiply()">
</div>

<div class="form-group">
<label> Total Price </label>
<input type="text" name="TOTAL" id="TOTAL">
</div>

<button class="btn btn-primary">continue to buy</button>

</form>
<br>
<h3> Description </h3> <br> 
<h4><?php echo $row['Description'];?> </h4>


<?php
}
?>
</div>

<script>
function multiply()
{
    a = Number(document.getElementById('QTY').value);
    b = Number(document.getElementById('PPRICE').value);
    c = a * b;

    document.getElementById('TOTAL').value = c;
}

</script>
	


</body>
</html>