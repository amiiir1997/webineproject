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
  		<h5 class="card-header">ایجاد بکیج</h5>
  		<form class="row g-3 form" method="post" action = <?php echo e(asset('newpackageinsert')); ?>>
  			<?php echo csrf_field(); ?>
	  		<div class="col-auto">
	    		<input type="text" class="form-control" name = "name" placeholder="نام">
	  		</div>
        <div class="col-auto">
          <input type="text" class="form-control" name = "price" placeholder="قیمت">
        </div>
	  		<div class="col-auto">
	    		<button type="submit" class="btn btn-primary mb-3">ساختن</button>
	  		</div>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="form-check form-switch">
            <input class="form-check-input" name = <?php echo e("id".$d['id']); ?> type="checkbox" value="1" id="<?php echo e($d['id']); ?>">
            <label class="form-check-label" for=<?php echo e($d['id']); ?> >
              <?php echo e($d['name']); ?>

            </label>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</form>
	</div>
  </body>
</html>
<?php /**PATH /var/www/html/webineproject/webine/resources/views/newpackage.blade.php ENDPATH**/ ?>