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
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card back">
  		  <h5 class="card-header"><?php echo e($d['name']); ?></h5>
        <h5>قیمت: <?php echo e($d['price']); ?></h5>
        <h4>لیست ویژگی ها :</h4>
  		  <?php $__currentLoopData = $d['atts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <h5> <?php echo e($a['name']); ?></h5>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </body>
</html>
<?php /**PATH /var/www/html/webineproject/webine/resources/views/packages.blade.php ENDPATH**/ ?>