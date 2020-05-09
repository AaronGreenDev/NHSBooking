 <?php include 'includes/header.php'; ?>
<?php 
	//Create DB Object
	$db = new Database();
	
	//Create Query
	$query = "SELECT * FROM rooms";
	
	//Run Query
	$rooms = $db->select($query);
	
	//Create Query
	$query = "SELECT * FROM locations";
	
	//Run Query
	$locations = $db->select($query);
	
	//Create Query
	$query = "SELECT * FROM rooms INNER JOIN locations
			  ON rooms.location = locations.location_id
			  WHERE locations.location_id = 1";
	//Run Query
	$Wolverhampton = $db->select($query);
	
	//Create Query
	$query = "SELECT * FROM rooms INNER JOIN locations
			  ON rooms.location = locations.location_id
			  WHERE rooms.id = 1";
	//Run Query
	$roomSpecific = $db->select($query);
	
	$query = "SELECT * FROM reviews";
		
	$searchBooking = $db->select($query);
	
	if(isset($_POST['submit'])){
		$query = "DELETE FROM bookings 
				  WHERE ('$booking_id' == booking_id);";
	    $db->delete($query);
	}

	
?>
<div class="container">
  <div class "row">
  <div class="col s6 l6">
	<h4>Reviews:</h4>
  </div>
  <div class="col s6 l6 right">
	<a class="btn btn-primary blue" href="\NHSBooking\addreview.php">+ New Review</a>
  </div>
  </div>

<div class="row">
<?php if($searchBooking) : ?>
<?php while($row = $searchBooking->fetch_assoc()) : ?>
    <div class="col s12 m4">
		<div class="card">
				<span class="card-title">Room <?php echo $row['room_num'];?></span>
				<p class="card-content">
				Booked at: <?php echo $row['time'];?>
				<br>
				Location: <?php echo $row['location'];?><a href="#">
				<br>
				<br>
				<?php echo $row['review'];?>
				
				
				<div class="card-action">
				<form role="form" method="post" action="bookings.php">
					<a href="#">Edit</a>
					<a href="#">Delete</a>
					</form>
				</div>
		</div>
    </div>
	
	<?php endwhile; ?>	
</div>
	<?php else : ?>
	<p>You have no reviews </p>
<?php endif; ?>

</div>

<?php include 'includes/footer.php'; ?>