<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
$cn=$_SESSION['cn'];
if($_SESSION['cn']=="")
{
header("location:web2/reg.php");
}
try
{

$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);

}

catch(Exception $ex)
{
echo $ex;
}


?><?php
session_start();
try
{

$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
$i;
$n;
}

catch(Exception $ex)
{
echo $ex;
}
$c=$_SESSION['cn'];
$tn=$_SESSION['tb'];

?>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->
    <head>
        <meta charset="utf-8">
        <title>❤️Foodies❤️</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

            <header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
						<center><h3>Customer No :
							 <?php echo $cn ?></h3></center>
                            <div class="col-md-6">
                                <div class="home-account">
                                    <a href="index.php">Home</a>
                                    
						</div>
                            </div>
                            <div class="col-md-6">
                                <div class="cart-info">
                                    <i class="fa fa-shopping-cart"></i>
                                    (<a href="myorder.php">My Orders</a>)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="#"><img src="images/foodieslogo.png" title="❤️Foodies❤️" alt="❤️Foodies❤️" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>

									<li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About</a></li>
                                        <li><a href="products.php">Menu</a></li>
                                        <li><a href="contact-us.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="search-box">  
                                    <form name="search_form" method="get" class="search_form">
                                        <input id="search" type="text" />
                                        <input type="submit" id="search-button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div id="heading" style="background-image:url(images/bck9.jpg)">
                <div class="container">
                    <div class="row" >
                        <div class="col-md-12">
						<div class="heading-content">
                                <h2><font color="#FFFFFF">Our Products</font></h2>
                                <span>Home / <a href="about-us.php">Products</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div id="products-post" style="background-image:url(images/background2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" >
                            <div id="product-heading">
                               <br><br> <h2>Hungry ?</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
					
                   
                  <div class="row" id="Container">
				  <center><font face="Times New Roman, Times, serif">
				  <form action="" method="post">
				 
					
					<table bordercolor="#FFFFFF" height="500"  align="center"  border="10" cellpadding="150" background="images/bk7.jpg">
					
						<tr align="center">
						
					 <th style="text-align:center;font-size:large">Sr.no</th>
						 <th style="text-align:center;font-size:large">Image</th>
						 <th style="text-align:center;font-size:large">Dish</th>
						 <th style="text-align:center;font-size:large">Price</th>
						 <th style="text-align:center;font-size:large">Quantity</th>
						 <th style="text-align:center;font-size:large">Type</th>
						 <th style="text-align:center;font-size:large">Order</th>
						 
                        </tr>
					
					</font>
					
					<?php
					
$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
						
					
					$t=$_GET['tab'];
					$cnt=1;
					
					
					$q=mysql_query("select * from $t order by Dish");
					while($row=mysql_fetch_array($q))
					{
					echo "<center>";
					
					echo "<tr >";
					
					echo "<th style='text-align:center'>".$cnt;
					echo "</th>";
					
					
					$n=$row['srno'];
					$s=$row['Dish'];
					$pi=$row['pic'];
					$rs=$row['Price'];
					
					
					echo "<th style='text-align:center'  width='250'>";
					echo "<img src=$pi width='100' height='100'>";
					 echo "<style='border:#330066 dotted'>";
					 echo "</th>";
					
					
					echo "<th style='text-align:center'>";
					echo "<a href='dish.php?ide=$n&w=$t'>".$s; 
					echo "</a>";
					echo "</th>";
					
					
					echo "<th style='text-align:center'>Rs.".$row['Price'];
					echo "</th>";
					
					
					
					echo "<th style='text-align:center' width='300'>";
				
					echo "<input type='number' name=$n min='1' max='50' >";
					echo "</th>";
					
					$f="2_".$n;	
					echo "<th style='text-align:center' width='300'>";
					echo "<select name='$f'>";
					echo "<option value='Table'>On Table</option>";
					echo "<option value='Parcel'>Parcel</option></select></th>";
					
					
						$i="1_".$n;
					echo "<th style='text-align:center' width='250'>";
					echo "<input type='submit' name=$i value='Order'>";
					if(isset($_POST[$i]))
					{
					$pp=$_POST[$n];
					$type=$_POST[$f];
					if($c!=0)
					{
					if(mysql_query("insert into myorder(cust_no,tab,dish,qty,price,type) values('$c','$tn','$s','$pp','$rs','$type')"))
					{
				
					echo "Saved";
					
					
					}
					else
					echo "Failed";
					}
					else
					echo "Invalid Customer";
					
					}
					echo "</tr>";
					
					$cnt=$cnt+1;
				
					}
					
					?>	
					
					</table>
	
							  </h3> </center> 
							
					</font>
					                    </div>
					 </div>
                       
						
								   
					  
                 


			<footer>
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="subscribe-form">
                                    <span>Get in touch with us</span>
                                    <form method="get" class="subscribeForm">
                                        <input id="subscribe" type="text" />
                                        <input type="submit" id="submitButton" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="social-bottom">
                                    <span>Follow us:</span>
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-rss"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="about">
                                    <h4 class="footer-title">About Grill</h4>
                                    <p>Grill is free HTML5 template by <span class="blue">template</span><span class="green">mo</span> and it is a free responsive bootstrap layout that can be applied for any purpose.
                                    <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">Shop Categories</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh Juices</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious Meals</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian Pizzas</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="recent-posts">
                                    <h4 class="footer-title">Recent posts</h4>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post1.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                            <span>24/12/2084</span>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post2.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Simple and effective meals</a></h6>
                                            <span>18/12/2084</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">More info</h4>
                                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>010-020-0340</li>
                                        <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                                        <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>Copyright ? 2084 <a href="#">Your Company Name</a></p>
                    </div>
                    
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>