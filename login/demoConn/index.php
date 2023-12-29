<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">


		   <div class="mb-3">
          <label class="form-label" >Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
          
        </div>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" >description</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
        </div>
		
           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>

	 
</body>
</html>