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
	
	$query = "SELECT * FROM bookings";
		
	$searchBooking = $db->select($query);
	
	
?>
 <div class="row">
 <div class="col s12">
<h4>All Rooms:</h4>
</div>
<?php if($rooms) : ?>
	<?php while($row = $rooms->fetch_assoc()) : ?>
          <div class="col s12 m4">
				<div class="card">
				<div class="card-image">
				<img src="images/sample-1.jpg">
				</div>
				<span class="card-title">Room <?php echo $row['id'];?></span>
            <p class="card-content"><?php echo $row['address'];?><a href="#">
			<br/>
			<?php echo $row['facilities'];?></a></p>
			<div class="card-action">
			<a href="#">This is a link</a>
			</div>
			   </div>
    </div>
          <!-- /.blog-post -->
			<?php endwhile; ?>		
  
  
         
    </div>  

<?php else : ?>
	<p>There are no posts yet </p>
<?php endif; ?>

  
<h4>Room 1 search:</h4>
<div class="row">
<?php if($roomSpecific) : ?>
<?php while($row = $roomSpecific->fetch_assoc()) : ?>
    <div class="col s12 m4">
		<div class="card">
				<div class="card-image">
					<img src="images/sample-1.jpg">
				</div>
				<span class="card-title">Room <?php echo $row['id'];?></span>
				<p class="card-content"><?php echo $row['address'];?><a href="#">
				<br/>
				<?php echo $row['facilities'];?></a></p>
				<div class="card-action">
					<a href="#">This is a link</a>
				</div>
		</div>
    </div>
	
	<?php endwhile; ?>	
	</div>
	<?php else : ?>
	<p>There are no posts yet </p>
<?php endif; ?>



		<div class="row">
			<div class="col s12">
            <h4>Locations</h4>
			</div>
			<?php if($locations) : ?>
            <ol class="list-unstyled">
				<?php while($row = $locations->fetch_assoc()) : ?>
					<li><a href="posts.php?category=<?php echo $row['id'];?>"><?php echo $row['location'];?></a></li>
				<?php endwhile; ?>
            </ol>
			<?php else : ?>
				<p>There are no categories yet</p>
			<?php endif; ?>
    </div>

<?php include 'includes/footer.php'; ?>