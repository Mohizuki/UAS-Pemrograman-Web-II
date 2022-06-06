<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Novel</title>
	<link rel="stylesheet" href="../crud.css">
	<link rel="shortcut icon" type="image/icon" href="images/crunchiitopicon.ico" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<section>
	<div class="form-container">
		<h1>Insert Novel</h1>
		<form action="{{ route('store-genre') }}" method="POST">
            @csrf
			<div class="control">
				<label for="judul">Novel's Name</label>
				<input type="text" name="judul" id="judul">
			</div>
			<div class="checkboxlist">
			  	<div class="checklist">
  					<!-- <input class="fantasycheck" type="checkbox" id="fantasycheck" value="fantasycheck" name="genre[]">
  					<label class="fantasycheck" for="Fantasycheck">Fantasy</label> -->
					 <?php
						$con = mysqli_connect("localhost","root","","db_novel");
						$query = "SELECT * FROM detailgenre";
						$query_run = mysqli_query($con, $query);

						if(mysqli_num_rows($query_run) > 0){
							foreach($query_run as $row){
								?>
									<input type="checkbox" value="<?php echo $row['genrename'];  ?>" name="genre[]">
  									<label ><?php echo $row['genrename'];  ?></label>
								<?php
							}
						}
					?> 
				</div>
			</div>
			<div class="control descrip">
				<label for="desc_novel">Description</label>
				<input type="text" name="desc_novel" id="desc_novel">
			</div>
			<div class="form-group">
    			<input type="file" class="form-control-file" id="exampleFormControlFile1">
  			</div>
			<div class="control">
				<input type="submit" value="submit">
				<input type="submit" value="back" style="float: right; width:20%;" href="">
			</div>
		</form>
	</div>
</section>	
</body>
</html>