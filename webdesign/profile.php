<html>

<head>

<script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<title>Husky Supplies:Northeastern Dorm Supplies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }
    }
	.dropdown-menu{
	
	width:450px;
	
	}
	.input-group{
	padding-top:10px;
	width:350px;
	}
	@media (max-width: 1175px) {
	#deals{
		
	
	}
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav{
        float: none!important;
        margin-top:7.5px;
    }
    .navbar-nav>li{
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
	}
	@media (max-width: 990px) {
	#deals{
	
	}
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav{
        float: none!important;
        margin-top:7.5px;
    }
    .navbar-nav>li{
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
	}
	
	@media (max-width: 1480px) {
	#deals{
	
	
	}
    .navbar-header {
        float:none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav{
        float: none!important;
        margin-top:7.5px;
    }
    .navbar-nav>li{
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
}

#bathAndBed{
	}

.card-block {
    position:relative;
    display:inline-block;
    
    
}

#go {
    position:absolute;
    bottom:10px;
    right:10px;
    width:120px;
    height:30px;
}
#myNavbar a{
color:white;
}
#myNavbar li a:active #myNavbar li{
background-color:white;
}
#myNavbar li a:active{
color:#C50000;

}
#myNavbar ul>li>>ul>li>a{
color:black;
}
.navbar-header{
color:white;
}
.nav-item a{
color:#C50000;
}

#bestsellers .col-sm-2{
	border:2px solid black;

}
#best-sellers .panel-heading{
background-color:#C50000;
color:white;
}
#top-deals .panel-heading{
background-color:black;
color:white;
}
#top-deals a{
background-color:white;
color:black;

}
#best-sellers a{
background-color:white;
color:#C50000;
}
#bed ul li a,#bath ul li a,#furniture ul li a,#storage ul li a,#kitchen ul li a,#laundry ul li a,#electronics ul li a{

color:black;

}
footer div {
color:#C50000;
}
body {font-family: "Lato", sans-serif;}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

  </style>




</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM MyUsers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$row="";
$sql="SELECT id,email FROM MyUsers WHERE id = '1'";
$result=$conn->query($sql);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
if($result->num_rows ==1)
{
	while($row = $result->fetch_assoc())
	{
		//echo "id" .$row["id"] . " first name" ." ". $row["email"]." ";
	}
}


?>
<div class="container-fluid">
	<div class="page-header">
	<div class="row">
	<div class="col-lg-6">
		<img src="Pics/logo.png" alt="Pics/university_logo" class="img-responsive">&nbsp;&nbsp;<img src="Pics/thumbnail.jpg" alt="husky_logo"><strong><span style="color:#353535;left:10px;left:10px;bottom:-20px;top:10px;"><a href="home1.html" style="text-decoration:none">Husky Supplies</a></span></strong>
	
		</div>
		<div class="col-lg-6">
		
                <div class="input-group">
                    <input type="text" class="form-control button"  placeholder="Search" name="country" id="autocomplete-ajax" style="position: absolute; z-index: 2; background: white; "/>
					
					<input type="text" class="form-control button"  name="country" id="autocomplete-ajax-x" disabled="disabled" style="color: #CCC; position: absolute; background: white; z-index: 1;"/>
                    <span class="input-group-addon" id="searchaddonBtn">
                            <span class="glyphicon glyphicon-search" style="color:white"></span>
                        
                    </span>
                </div>
           
		
		
		</div>
	  </div>


<nav class="navbar navbar-inverse " id="navi" style="background-color:#C50000;">
  <div class="container-fluid">
    <div class="navbar-header">
	
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  
			
			
	

    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="background-color:#C50000;">
      <ul class="nav navbar-nav" >
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Bath &amp Bedding <span class="caret"></span></a>
			<ul class="dropdown-menu" id="bathAndBed">
			<div class="row">
			<div style="float:left" id="bed" class="col-sm-6 col-lg-6 ">
			
				<ul class="nav nav-pills nav-stacked" role="tablist">
				<li><a href="bedding.html" style="color:#C50000">Bedding</a></li>
			  <li><a href="category.html">Comforter Sets</a></li>
			  <li><a href="category.html">Mattresses</a></li>
			  <li><a href="category.html">Bed Covers</a></li>
			  <li><a href="category.html">Bed Sheets</a></li>
			  <li><a href="category.html">Pillows</a></li>
			  <li><a href="category.html">Pillow Covers</a></li>
			  <li><a href="category.html">Bed Bug Protector</a></li>
			  <li><a href="category.html">Bed Frames</a></li>
			  </ul>
			</div>
			<div style="float:left"class="col-sm-6 col-lg-6" id="bath">
				<ul class="nav nav-pills nav-stacked" role="tablist">
					<li><a href="bedding.html" style="color:#C50000">Bath</a></li>
				  <li><a href="category.html">Bath towels &amp rugs</a></li>
				  <li><a href="category.html">Shower curtains &amp accessories</a></li>
				  <li><a href="category.html">Shower totes &amp Bath Storage</a></li>
				  <li><a href="category.html">Robes &amp Slippers</a></li>
				  <li><a href="category.html">Grooming</a></li>
				  <li><a href="category.html">Dental Care</a></li>
				  <li><a href="category.html">Hair Care</a></li>
				  <li><a href="category.html">Skin Care</a></li>
				  <li><a href="category.html">Personal Care</a></li>
				  <li><a href="category.html">Medicines &amp Vitamins</a></li>			 		  
				</ul>
			</div>
			</div>
			</ul>
		</li>
      
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="furniture.html">Furniture <span class="caret"></span></a>
			<ul class="dropdown-menu" style="color:black">
			<div class="row">
			<div style="float:left" id="furniture" class="col-sm-12 col-lg-12 ">
			<ul class="nav nav-pills nav-stacked" role="tablist">
			  <li><a href="category.html">Desk &amp Desk Chairs</a></li>
			  <li><a href="category.html">Sofas</a></li>
			  <li><a href="category.html">Futons</a></li>
			  <li><a href="category.html">Ottomans &amp poufs</a></li>
			  <li><a href="category.html">Chairs</a></li>
			  <li><a href="category.html">Book Shelves &amp Cases</a></li>
			  <li><a href="category.html">Accent Tables</a></li>
			  <li><a href="category.html">TV Stands &amp Entertainment Centers</a></li>
			  <li><a href="category.html">Dining Tables</a></li></ul></div></div>
			</ul>
		</li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="storage.html">Storage &amp Organization <span class="caret"></span></a>
			<ul class="dropdown-menu" style="color:black">
			<div class="row">
			<div style="float:left" id="storage" class="col-sm-12 col-lg-12 ">
			<ul class="nav nav-pills nav-stacked" role="tablist">
			  <li><a href="category.html">StorageBoxes &amp Containers</a></li>
			  <li><a href="category.html">Clothing Storage</a></li>
			  <li><a href="category.html">Hangers &amp hooks</a></li>
			  <li><a href="category.html">Underbed Storage</a></li>
			  <li><a href="category.html">Shoe Storage</a></li>
			  <li><a href="category.html">Closet Accessories</a></li>
			  <li><a href="category.html">Jewelry Storage</a></li>
			  <li><a href="category.html">Makeup Organizers</a></li>
			  <li><a href="category.html">Memory Boards &amp Calendars</a></li>
			  <li><a href="category.html">BackPacks &amp Duffels</a></li>
			  <li><a href="category.html">Heating &amp Cooling</a></li></ul></div></div>
			 		  
			</ul>
		</li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="electronics.html">Electronics<span class="caret"></span></a>
			<ul class="dropdown-menu" style="color:black">
			<div class="row">
			<div style="float:left" id="electronics" class="col-sm-12 col-lg-12 ">
			<ul class="nav nav-pills nav-stacked" role="tablist">
			  <li><a href="category.html">Speakers &amp docking stations</a></li>
			  <li><a href="category.html">HeadPhones &amp Earbuds</a></li>
			  <li><a href="category.html">TurnTables &amp Vinyl records</a></li>
			  <li><a href="category.html">Activity Trackers</a></li>
			  <li><a href="category.html">Alarm Clocks</a></li>
			  <li><a href="category.html">Tech Accessories</a></li>
			  <li><a href="category.html">Electricals &amp Batteries</a></li></ul></div></div>
			 		  
			</ul>
		</li>
		
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="kitchen.html">Kitchen &amp Dining <span class="caret"></span></a>
			<ul class="dropdown-menu" style="color:black">
			<div class="row">
			<div style="float:left" id="kitchen" class="col-sm-12 col-lg-12 ">
			<ul class="nav nav-pills nav-stacked" role="tablist">
			  <li><a href="category.html">Small appliances</a></li>
			  <li><a href="category.html">Coffee</a></li>
			  <li><a href="category.html">Dinnerware</a></li>
			  <li><a href="category.html">Drinkware</a></li>
			  <li><a href="category.html">Cookware &amp Bakeware</a></li>
			  <li><a href="category.html">Kitchen tools &amp gadgets</a></li>
			  <li><a href="category.html">Food Storage</a></li>
			  <li><a href="category.html">Water &amp filters</a></li>
			  <li><a href="category.html">Care Packages</a></li></ul>	</div></div>	  
			</ul>
		</li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="laundry.html">Laundry &amp Cleaning<span class="caret"></span></a>
			<ul class="dropdown-menu" style="color:black">
			
			<div class="row">
			<div style="float:left" id="laundry" class="col-sm-6 col-lg-6 ">
			<ul class="nav nav-pills nav-stacked" role="tablist">
			  <li><a href="category.html">Hampers &amp Sorters</a></li>
			  <li><a href="category.html">Drying racks</a></li>
			  <li><a href="category.html">Irons &amp Ironing boards</a></li>
			  <li><a href="category.html">Laundry care</a></li>
			  <li><a href="category.html">Vaccums &amp cleaning supplies</a></li></ul></div></div>
			</ul>
		</li>
	
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login</a>
		<ul class="dropdown-menu" style="color:black">
		
		<div class="row">
			<div style="float:left" id="laundry" class="col-sm-6 col-lg-6 ">
			<ul class="nav nav-pills nav-stacked" role="tablist">
			<li><a href="userRegistration.html">Register</a></li>
			<li>
			  <a href="loginpage.html">Login</a>
			 </li>
			  
	

			</ul>
			</div>
		</div>
		</ul>
		
		</li>
		<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div
			class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">


			<div class="panel panel-info">
				<div class="panel-heading" style="background-color: #C50000">
					<h3 class="panel-title" style="color: white;">My Profile</h3>
				</div>
				<div class="panel-body" ng-app="myApp">
					<div class="row">
						<div class="col-md-3 col-lg-3 " align="center">
								<img alt="User Pic"
									src="chandrika.jpg"
									class="img-circle img-responsive">
						</div>

								
						<div class=" col-md-9 col-lg-9 " ng-include src="'tablephp.php'">
									
						</div>
					</div>
					<div class="modal-footer">
									<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary"
							data-toggle="modal" data-target="#myModal"
							style="background-color: #C50000">Edit Profile
						</button>
									
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<footer class="container-fluid text-center">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
						Connect with the store<br> 
						Receive promotions,news and information<br>
						
						
					</div>
					<div class="col-sm-4">
						Customer Service: <a href="#">Returns</a>|
						<a href="#">Privacy Policy</a>|
						<a href="#">Our Guarantee</a>|
						<a href="#">Shipping</a>|
						<a href="#">Product Guides</a>
						<a href="#">Customer Care</a>
						<br>
						Social Media &amp Articles: <a href="#">Instagram</a>|
						<a href="#">Pinterest</a>|
						<a href="#">Twitter</a>
						|<a href="#">Facebook</a>|
						<a href="#">The best Journal</a>|
						
					</div>
					<div class="col-sm-4">
					
						Huskies Store<br>
						360 HuntingtonAve,Boston,
						MA 02115.
						<a href="contact.html">Contact us</a>
					
					</div>
				</div>
			</div><br><hr>
		  <p>Husky Store</p>
		</footer>
	</div>
		
	




<script>
var app=angular.module("myApp",[]);

</script>















</body>


</html>