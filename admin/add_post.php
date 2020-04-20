<?php include 'includes/header.php'; ?>
		
<?php 
	
	//Create DB Object
	$db = new Database();

	
	if(isset($_POST['submit']))
	{
		//Assign Vars
		$title = mysqli_real_escape_string($db->link, $_POST['title']);
		$body = mysqli_real_escape_string($db->link, $_POST['body']);
		$category = mysqli_real_escape_string($db->link, $_POST['category']);
		$author = mysqli_real_escape_string($db->link, $_POST['author']);
		$tags = mysqli_real_escape_string($db->link, $_POST['tags']);
		//Simple Validation
		if($title == '' || $body =='' || $category == '' || $author == '')
		{
			//Set Error
			$error = 'Please fill out all fields';
		}
		else
		{
		$query = "INSERT INTO posts
		
				(title, body, category, author, tags)
				VALUES('$title','$category', '$author', '$tags')";
				
				$insert_row = $db->insert($query);
		
		}
	}
?>				
		
		
<form role="form" method="post" action="add_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
  
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea> 
  </div>
  
 <div class="form-group">
    <label>Category</label>

 </div>
  
    <div class="form-group">
    <label>Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
  </div>
    <div class="form-group">
    <label>Tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
  </div>
   
  
  
  
  <div>
  <input name="submit" type="submit" class="btn btn-default" value="Submit"/>
  <a href-"index.php" class="btn btn-default">Cancel</a>
  </div>
  <br>
</form>
		
<?php include 'includes/footer.php'; ?>
		