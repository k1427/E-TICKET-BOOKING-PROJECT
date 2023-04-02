<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['departure_date'])){
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
  </div>
</nav>

<div id="circularMenu" class="circular-menu">

                        <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
                          <i class="fa fa-plus"></i>
                        </a>
                      
                        <menu class="items-wrapper">
                          <a href="mainhome.html" class="menu-item fa fa-facebook"></a>
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
                          <a href="mainhome.html" class="menu-item fa fa-home"></a>
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
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
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
								<h3 class="panel-title">3. PASSENGER INFO</h3>
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
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>ACCOMODATION</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-acc">
					  <table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
							        <th> <span class="glyphicon glyphicon-record" aria-hidden="true"></span> 
							        Accomodation
							        </th>
							        <th>
							        	<center>
							        		Slots
							        	</center>
						        	</th>
							        <th>
							        	<center>
							        		Fare
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
						   		<?php require_once('data/get_all_accomodations.php'); ?>
						   		<tr>
						   			<td>
						   				<input value="<?= $getSit['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getSit['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getSit['acc_slot'] - $totalSit['sit']; ?>
						   			</td>
						   			<td align="center"><?= $getSit['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getEcoA['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getEcoA['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getEcoA['acc_slot'] - $totalEcoA['ecoA']; ?>
						   			</td>
						   			<td align="center"><?= $getEcoA['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getEcoB['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getEcoB['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getEcoB['acc_slot'] - $totalEcoB['ecoB']; ?>
						   			</td>
						   			<td align="center"><?= $getEcoB['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getTour['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getTour['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getTour['acc_slot'] - $totalTour['ecoT']; ?>
						   			</td>
						   			<td align="center"><?= $getTour['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getCab['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getCab['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getCab['acc_slot'] - $totalCab['ecoC']; ?>
						   			</td>
						   			<td align="center"><?= $getCab['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getDel['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getDel['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getDel['acc_slot'] - $totalDel['ecoD']; ?>
						   			</td>
						   			<td align="center"><?= $getDel['acc_price']; ?></td>
						   		</tr>
						    </tbody>
					    </table>
				      <div class="form-group">
					    <label for="">Total # of Passenger:</label>
					    <input type="number" min="1" class="form-control" name="totalPass" plactreholder="Total # of Passenger" autocomplete="off">
					  </div>
					  <button type="submit" class="btn btn-success">NEXT
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
	$(document).on('submit', '#form-acc', function(event) {
		event.preventDefault();
		/* Act on the event */
		var acc = $('input[name="acc"]:checked').val();
		var totalPass = $('input[name="totalPass"]').val();

		if(acc == null){
			alert('Please Select Accomodation!');
		}else{
			// console.log(acc);
			if(totalPass.length == 0){
				alert('Please Enter Number of Passenger!');
			}else{
				$.ajax({
						url: 'data/session_accomodation.php',
						type: 'post',
						dataType: 'json',
						data: {
							acc : acc,
							tp : totalPass
						},
						success: function (data) {
							console.log(data.slot);
							// 	window.location = "passenger.php";
							if(data.slot >= 0){
								window.location = "passenger.php";
							}else{
								alert('Not Enough Slot!');
							}
						},
						error: function(){
							alert('Error: L175+');
						}
					});
			}//end totalPass
		}//end acc == null
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