<!DOCTYPE HTML>

<html>

<head>

  <title>Categories</title>

</head>

<body>

  
  <?php
   if(!empty($categories))
   {
  ?> 
    <div>
      <form action="<?php echo base_url('frontend/home/getPackage'); ?>" method="post">
      <label>Select Categories</label>  
	    <select name="category">
	      <?php
		  
		    foreach($categories as $category)
			{			
		  ?>
		      <option value='<?php echo $category->id ?>'><?php echo $category->category_name ?></option> 
          <?php  		
			}
		  
		  ?>
	    </select>
	    <input type="submit" name="submit" value="submit"/>
	  </form>  
    </div>
  <?php
   }
  ?>   
  
  
  <?php
    if(!empty($packages))
	{
	  foreach($packages as $package)
	  {
  ?>
        <a href="#"><?php echo $package->title ?></a>
  <?php  
	  }	  
	}
  ?>

</body>

</html>