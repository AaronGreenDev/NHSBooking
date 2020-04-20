<?php include 'includes/header.php'; ?> 


<script> document.addEventListener('DOMContentLoaded', function() {
	var instance = M.FormSelect.getInstance(elem); });</script>
	
	<script>  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, {});
  });
  </script>
  
  <script>
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems, {});
  });
  
  </script>
<?php
$db = new Database();



	$roomLoc = '';
	$date_time = '';

if(isset($_POST['submit'])){



	$roomLoc = $_POST['location'];
	$date_time = $_POST['date_time'];
	
	
		$query = "SELECT * FROM rooms R 
				  JOIN locations L ON L.location_id = R.location 
				  JOIN bookings B ON B.room = R.id
				  WHERE L.location = '$roomLoc' AND B.time = '$date_time' AND B.booked = 0
				 ";
		
		$searchBooking = $db->select($query);
		
	
}


?>
<div class="container">
  <div class="row">
    <form class="col s12" role="form" method="post" action="search.php">
	</div>
     <! –– Location Drop Down ––>
		<div class="row">
		<div class="input-field col s12 l6">
		<select class="browser-default"name="location" id="location" type="text" class="validate">
			<option value="" disabled selected>Location</option>
			<option value="Wolverhampton">Wolverhampton</option>
			<option value="Walsall">Walsall</option>
			<option value="Stafford">Stafford</option>
		</select>
    
		</div>
		 <! –– Facilities Drop Down ––>
		<div class="input-field col s12 l6">
		<select class="browser-default"name="facilities" id="facilities" type="text" class="validate">
			<option value="" disabled selected>Facilities</option>
			<option value="All">All</option>
			<option value="Disabled Access">Disabled Access</option>
			<option value="Video">Video Conferencing</option>
			<option value="Video">TV</option>
		</select>
    
		</div>
 
      
		
		</div>
		<div class="row">
		<div class="col s12 l6">
		<input type="text" class="datepicker" placeholder="Date">
		</div>
		<div class="col s12 l6">
		<input type="text" class="timepicker" placeholder="Time">
		</div>
		</div
		
	   <div class="input-field col s12 l6">
          <input placeholder="Date/time" type="hidden" value="2020-03-06 12:00:00" name="date_time" id="date_time" type="text" class="validate">
          <label for="date_time"></label>
        </div>
		<br/>
		<br/>
		<br/>
		<div class="row">
		  <div class="col s12 center">
			<button name="submit" type="submit" class="waves-effect waves-light btn blue">Find Room</button>
			</div>
	    </div>
		
    </form>
  </div>
  <?php if(isset($searchBooking)) : ?>
  <div class="row">
  <div class="col s12">
  <h4>Search Results:</h4>
  </div>
  </div>
<div class="row">
 <! –– Search Results Loop ––>
<?php if($searchBooking) : ?>
<?php while($row = $searchBooking->fetch_assoc()) : ?>
    <div class="col s12 m4 l4">
		<div class="card">
				<span class="card-title">Room <?php echo $row['room_name'];?></span>

				<p class="card-content">Location: <?php echo $row['location'];?>
				<br/>
				Available at: <?php echo $row['time'];?>
				<br/>
				Facilities: 
				<br/>
				<a href="#">
				<?php echo $row['facilities'];?></a></p>
				<div class="card-action">
					<a href="#">Info</a>
					<a href="\NHSBooking\addbooking.php"><button name="submit" type="submit" class="waves-effect waves-light btn blue">Book</button></a>
					
				</div>
		</div>
    </div>
	
	<?php endwhile; ?>	
	</div>
	<?php else : ?>
	<div class="row">
	<div class="col s12 l6"
	<p>No rooms available </p>
	</div>
	</div>
<?php endif; ?>
</div>
<?php endif; ?>

<br/>


<?php include 'includes/footer.php'; ?>
        