<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Novel</title>
	<link rel="stylesheet" href="../../crud.css">
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
		<h1>Edit Novel</h1>
		<form action="{{ route('update-genre', $model->id) }}" method="POST">
            @csrf
			@method('PUT')
			<div class="control">
				<label for="judul">Novel's Name</label>
				<input type="text" name="judul" id="judul" value="{{ $model->judul }}">
			</div>
			<div class="checkboxlist">
			  <div class="checklist">
  					<input class="fantasycheck" type="checkbox" id="flexCheckDefault" value="fantasycheck">
  					<label class="fantasycheck" for="Fantasycheck">Fantasy</label>
				</div>
			  <div class="checklist">
					<input class="actioncheck" type="checkbox" id="actioncheck" value="actioncheck">
					<label class="actioncheck" for="actioncheck">Action</label>
				</div>
			  <div class="checklist">
					<input class="dramacheck" type="checkbox" id="dramacheck" value="dramacheck">
					<label class="dramacheck" for="dramacheck">Drama</label>
				</div>
			  <div class="checklist">
  					<input class="scificheck" type="checkbox" id="scificheck" value="scificheck">
  					<label class="scificheck" for="scificheck">Sci-fi</label>
				</div>
			  <div class="checklist">
					<input class="romcheck" type="checkbox" id="romcheck" value="romcheck">
					<label class="romcheck" for="romcheck">Romance</label>
				</div>
			</div>
			<div class="control descrip">
				<label for="desc_novel">Description</label>
				<input type="text" name="desc_novel" id="desc_novel" value="{{ $model->desc_novel }}">
			</div>
			<div class="form-group">
    			<input type="file" class="form-control-file" id="exampleFormControlFile1">
  			</div>
			<div class="control">
				<input type="submit" value="submit">
				<input type="submit" value="back" style="float: right; width:20%;" href="">
			</div>
		</form>
		</form>
	</div>
</section>	
</body>
</html>