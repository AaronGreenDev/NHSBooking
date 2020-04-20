<?php include 'includes/header.php'; ?> 
<?php
$db = new Database();

if(isset($_POST['submit'])){
	
	$bookingRoom = $_POST['roomid'];
	$bookingLocation = $_POST['location'];
	$bookingTime = $_POST['time'];
	$bookingDuration = $_POST['duration'];
	$bookingOccupants = $_POST['occupants'];
	
	if($bookingRoom == '' || $bookingLocation == '' || $bookingTime == ''){
		$error = 'Fill out all fields';
	}
	else{
		$query = "INSERT INTO bookings 
					(room,location_num,time,duration,occupants,booked)
					VALUES('$bookingRoom','$bookingLocation','$bookingTime','$bookingDuration','$bookingOccupants','1');";
	    $db->insert($query);
	}
}
?>
<br/>
<div class="container">
    <form role="form" method="post" action="addbooking.php" class="col s12">
      <div class="row">
        <div class="input-field col s12 l6">
          <input readonly value="" name="roomid" id="roomid" type="text" >
          <label for="roomid">Room</label>
        </div>
		
        <div class="input-field col s12 l6">
          <input readonly value="" name="location" id="location" type="text" >
          <label for="location">Location</label>
        </div>
      </div>

	   <div class="row">
        <div class="input-field col s12 l6">
          <input readonly value="" name="time" id="time" type="text" >
          <label for="time">Time</label>
        </div>
		</div>
		<br/>
    <div class="row">
        <div class="input-field col s12 l6">
          <input name="duration" id="duration" type="text" class="validate">
          <label for="duration">Duration</label>
        </div>
     
	  
	 
        <div class="input-field col s12 l6">
          <input name="occupants" id="occupants" type="text" class="validate">
          <label for="occupants">Occupants</label>
        </div>
      </div>
	  </br>
	  </br>
	  
	  
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Review</label>
        </div>
      </div>
    </form>
  </div>
	  
     <div class="row">
	 <div class="col s12 center">
	  <button name="submit" type="submit" class="waves-effect waves-light btn center blue">Submit Review</button>
	</div>
	</div>
	  </form>
	</div>
	
<?php include 'includes/footer.php'; ?> 