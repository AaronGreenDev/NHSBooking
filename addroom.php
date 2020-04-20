<?php include 'includes/header.php'; ?> 
<?php
$db = new Database();

if(isset($_POST['submit'])){
	
	$roomid = $_POST['roomid'];
	$roomLocation = $_POST['location'];
	$roomAddress = $_POST['address'];
	$roomFacilities = $_POST['facilities'];
	
	if($roomid == '' || $roomAddress == '' || $roomFacilities == ''){
		$error = 'Fill out all fields';
	}
	else{
		$query = "INSERT INTO rooms 
					(room_name,location,address,facilities)
					VALUES('$roomid','$roomLocation','$roomAddress','$roomFacilities');";
	    $db->insert($query);
	}
}
?>
<div class="container">
    <form role="form" method="post" action="addroom.php" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="roomid" id="roomid" type="text" class="validate">
          <label for="roomid">Room</label>
        </div>

        <div class="input-field col s6">
          <input name="address" id="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>
      </div>
	  
	  <div class="row">
        <div class="input-field col s6">
          <input name="location" id="location" type="text" class="validate">
          <label for="location">Location</label>
        </div>

        <div class="input-field col s6">
          <input name="facilities" id="facilities" type="text" class="validate">
          <label for="facilities">Facilities</label>
        </div>
      </div>
     <div class="row">
	 <div class="col s12 center">
	  <button name="submit" type="submit" class="waves-effect waves-light btn blue">Add Room</button>
	</div>
	</div>

   </form>
	
	
<?php include 'includes/footer.php'; ?> 