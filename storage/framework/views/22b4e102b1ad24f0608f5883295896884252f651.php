<!doctype html>
<html dir="rtl">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    	.back{
    		width : 50%;
    		margin-top : 5%;
    	}
    	.form{
    		margin : 1%;
    		margin-right: 2%;
    	}
    </style>
  </head>
  <body><center>
    <div class="card back">
  		<h5 class="card-header">ایجاد ویژگی</h5>
  		<form class="row g-3 form" method="post" action = <?php echo e(asset('newattributeinsert')); ?>>
  			<?php echo csrf_field(); ?>
	  		<div class="col-auto">
	    		<input type="text" class="form-control" name = "name" placeholder="نام">
	  		</div>
	  		<div class="col-auto">
	    		<button type="submit" class="btn btn-primary mb-3">ساختن</button>
	  		</div>
		</form>
	</div>

  </body>
</html>
<?php /**PATH /var/www/html/webineproject/webine/resources/views/newattribute.blade.php ENDPATH**/ ?>