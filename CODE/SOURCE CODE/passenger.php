<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['accomodation'])){
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Metro Booking</title>

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

body {
    background-color: #EDEDED;
  }
  .circular-menu {
    position: fixed;
    bottom: 1em;
    right: 1em;
  }
  
  .circular-menu .floating-btn {
    display: block;
    width: 3.5em;
    height: 3.5em;
    border-radius: 50%;
    background-color: hsl(4, 98%, 60%);
    box-shadow: 0 2px 5px 0 hsla(0, 0%, 0%, .26);  
    color: hsl(0, 0%, 100%);
    text-align: center;
    line-height: 3.9;
    cursor: pointer;
    outline: 0;
  }
  
  .circular-menu.active .floating-btn {
    box-shadow: inset 0 0 3px hsla(0, 0%, 0%, .3);
  }
  
  .circular-menu .floating-btn:active {
    box-shadow: 0 4px 8px 0 hsla(0, 0%, 0%, .4);
  }
  
  .circular-menu .floating-btn i {
    font-size: 1.3em;
    transition: transform .2s;  
  }
  
  .circular-menu.active .floating-btn i {
    transform: rotate(-45deg);
  }
  
  .circular-menu:after {
    display: block;
    content: ' ';
    width: 3.5em;
    height: 3.5em;
    border-radius: 50%;
    position: absolute;
    top: 0;
    right: 0;
    z-index: -2;
    background-color: hsl(4, 98%, 60%);
    transition: all .3s ease;
  }
  
  .circular-menu.active:after {
    transform: scale3d(5.5, 5.5, 1);
    transition-timing-function: cubic-bezier(.68, 1.55, .265, 1);
  }
  
  .circular-menu .items-wrapper {
    padding: 0;
    margin: 0;
  }
  
  .circular-menu .menu-item {
    position: absolute;
    top: .2em;
    right: .2em;
    z-index: -1;
    display: block;
    text-decoration: none;
    color: hsl(0, 0%, 100%);
    font-size: 1em;
    width: 3em;
    height: 3em;
    border-radius: 50%;
    text-align: center;
    line-height: 3;
    background-color: hsla(0,0%,0%,.1);
    transition: transform .3s ease, background .2s ease;
  }
  
  .circular-menu .menu-item:hover {
    background-color: hsla(0,0%,0%,.3);
  }
  
  .circular-menu.active .menu-item {
    transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  
  .circular-menu.active .menu-item:nth-child(1) {
    transform: translate3d(1em,-7em,0);
  }
  
  .circular-menu.active .menu-item:nth-child(2) {
    transform: translate3d(-3.5em,-6.3em,0);
  }
  
  .circular-menu.active .menu-item:nth-child(3) {
    transform: translate3d(-6.5em,-3.2em,0);
  }
  
  .circular-menu.active .menu-item:nth-child(4) {
    transform: translate3d(-7em,1em,0);
  }
  
  /**
   * The other theme for this menu
   */
  
  .circular-menu.circular-menu-left {
    right: auto; 
    left: 1em;
  }
  
  .circular-menu.circular-menu-left .floating-btn {
    background-color: hsl(217, 89%, 61%);
  }
  
  .circular-menu.circular-menu-left:after {
    background-color: hsl(217, 89%, 61%);
  }
  
  .circular-menu.circular-menu-left.active .floating-btn i {
    transform: rotate(90deg);
  }
  
  .circular-menu.circular-menu-left.active .menu-item:nth-child(1) {
    transform: translate3d(-1em,-7em,0);
  }
  
  .circular-menu.circular-menu-left.active .menu-item:nth-child(2) {
    transform: translate3d(3.5em,-6.3em,0);
  }
  
  .circular-menu.circular-menu-left.active .menu-item:nth-child(3) {
    transform: translate3d(6.5em,-3.2em,0);
  }
  
  .circular-menu.circular-menu-left.active .menu-item:nth-child(4) {
    transform: translate3d(7em,1em,0);
  }
  </style>
	</head>
	<body style="background-color: silver;">

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-METRO BOOKING</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      	<a href="mainhome.html">Home
      	<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
      	</a>
      </li>
    </ul>
	<ul class="nav navbar-nav">
      <li class="active">
      	<a href="trainpass.html">E-pass
      	<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
      	</a>
      </li>
    </ul>
	<ul class="nav navbar-nav">
      <li class="active">
      	<a href="contact.html">contact us
      	<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
      	</a>
      </li>
    </ul>
	
	<ul class="nav navbar-nav">
      <li class="active">
      	<a href="home.html">history
      	<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
      	</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="reserved.php"><span class="glyphicon glyphicon-backward"></span> Back To Step1</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="accomodation.php"><span class="glyphicon glyphicon-backward"></span> Back To Step2</a></li>
    </ul>
  </div>
</nav>


<div id="circularMenu" class="circular-menu">

                        <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
                          <i class="fa fa-plus"></i>
                        </a>
                      
                        <menu class="items-wrapper">
                          <a href="#" class="menu-item fa fa-facebook"></a>
                          <a href="#" class="menu-item fa fa-twitter"></a>
                          <a href="#" class="menu-item fa fa-google-plus"></a>
                          <a href="#" class="menu-item fa fa-linkedin"></a>
                        </menu>
                      
                      </div>
                      
                      
                      <div id="circularMenu1" class="circular-menu circular-menu-left active">
                      
                        <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
                          <i class="fa fa-bars"></i>
                        </a>
                      
                        <menu class="items-wrapper">
                          <a href="index.html" class="menu-item fa fa-home"></a>
                          <a href="#" class="menu-item fa fa-user"></a>
                          <a href="#" class="menu-item fa fa-pie-chart"></a>
                          <a href="#" class="menu-item fa fa-cog"></a>
                        </menu>
                      
                      </div>


<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">STEPS FOR BOOKING</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1. ITINERARY
								</h3>
							</div>
							<div class="panel-body">
								SCHEDULE OF TRAVEL
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. ACCOMODATION
								</h3>
							</div>
							<div class="panel-body">
								ACCOMODATION TYPE
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">3. PASSENGER INFO
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								PASSENGER DETAILS
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">4. PAYMENT INFO</h3>
							</div>
							<div class="panel-body">
								TOTAL PAYMENT
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>

<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Message!</strong> Please review your passenger information.
			You cannot change your reservation once you proceed. 
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>PASSENGER INFO</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-pass">
					  <div class="form-group">
					    <label for="">Booked By:</label>
					    <input type="text" class="form-control" id="book-by" placeholder="Enter Name"
					    autofocus="" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Contact:</label>
					    <input type="text" class="form-control" id="cont" placeholder="Enter Contact" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Address:</label>
					    <input type="text" class="form-control" id="address" placeholder="Enter Address" required="" autocomplete="off">
					  </div>
					<br />
					<?php 
						$tb = $_SESSION['totalPass'];	
					 	$count = 1;
					 	for($i = 0; $i < $tb; $i++){
					?>
					  <div class="panel panel-primary">
					  	<div class="panel-heading">
					  		<h3 class="panel-title">Booked(<?= $count; ?>)</h3>
					  	</div>
					  	<div class="panel-body">
					  		<div class="container-fluid">
					  			<div class="form-group">
								    <label for="">Full Name (<?= $count; ?>):</label>
								    <input type="text" class="form-control" id="fN<?php echo $i; ?>"
								    placeholder="Enter Fullname" required autocomplete="off">
								  </div>

								  <div class="form-group">
								    <label for="">Age: (<?= $count; ?>):</label>
								    <input type="number" class="form-control" id="age<?php echo $i; ?>"
								    placeholder="Enter Age" required autocomplete="off">
								  </div>
								  <div class="form-group">
								    <label for="">Gender: (<?= $count; ?>):</label>
								    <select class="btn btn-default" id="gender<?php echo $i; ?>">
								    	<option value="Male">Male</option>
								    	<option value="Female">Female</option>
								    </select>
								  </div>
					  		</div>
					  	</div>
					  </div>
					<?php
					$count++;
					 	}//end for
					 ?>
					  <button type="submit" class="btn btn-success">NEXT
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<?php require_once('admin/modal/message.php'); ?>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-pass', function(event) {
		event.preventDefault();
		/* Act on the event */
		var bookBy = $('#book-by').val();
		var cont = $('#cont').val();
		var address = $('#address').val();
		
		var counter = <?= $i; ?>;
		for(var i = 0; i < counter; i++){
			var fN = $('#fN'+i).val();
			var age = $('#age'+i).val();
			var gender = $('#gender'+i).val();
			$.ajax({
					url: 'data/save_booked.php',
					type: 'post',
					dataType: 'json',
					data: {
						bookBy : bookBy,
						cont : cont,
						address : address,
						fN : fN,
						age : age,
						gender : gender
					},
					success: function (data) {
						// console.log(data);
						if(data.valid == true){
							window.location = data.url;
						}
					},
					error: function(){
						// alert('Error: L192+');
					}
				});
		}//end for
		alert('Booked Successfully!');	
	});

</script>


</body>
</html>

<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset

 ?>