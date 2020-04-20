<?php include 'config/config.php'; ?>
<?php include 'libraries/Database.php'; ?>
<?php include 'helpers/format_helper.php';?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- Compiled and minified CSS -->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
	        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link rel="stylesheet" href="materialize/css/custom.css" media="screen,projection">
  

  </head>

  <body>
	
<script>

      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {});
  });
 
</script>
 
  <nav class="nav-extended blue darken-3">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center"><img style="width:100px;height:85px;" src="\NHSBooking\nhs-logo.png"></img></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="\NHSBooking\search.php">Home</a></li>
        <li><a href="\NHSBooking\bookings.php">My Bookings</a></li>
        <li><a href="\NHSBooking\search.php">Reviews</a></li>
      </ul>
    </div>
    <div class="nav-content blue darken-3">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="\NHSBooking\search.php">ROOM</a></li>
        <li class="tab"><a href="#test4">FACILITIES</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav center " id="mobile-demo">
  <a href="#"><img style="width:100px;height:85px;" src="\NHSBooking\nhs-logo.png"></img></a>
    <li><a href="\NHSBooking\search.php">Search</a></li>
    <li><a href="\NHSBooking\bookings.php">Bookings</a></li>
    <li><a href="\NHSBooking\search.php">Reviews</a></li>
  </ul>

