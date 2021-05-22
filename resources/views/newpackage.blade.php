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
  		<form class="row g-3 form" method="post" action = {{asset('newpackageinsert')}}>
  			@csrf
	  		<div class="col-auto">
	    		<input type="text" class="form-control" name = "name" placeholder="نام">
	  		</div>
        <div class="col-auto">
          <input type="text" class="form-control" name = "price" placeholder="قیمت">
        </div>
	  		<div class="col-auto">
	    		<button type="submit" class="btn btn-primary mb-3">ساختن</button>
	  		</div>
        @foreach ($data as $d)
          <div class="form-check form-switch">
            <input class="form-check-input" name = {{"id".$d['id']}} type="checkbox" value="1" id="{{$d['id']}}">
            <label class="form-check-label" for={{$d['id']}} >
              {{$d['name']}}
            </label>
            <div class="col-auto">
              <input type="text" class="form-control" name = {{"value".$d['id']}} placeholder="مقدار">
            </div>
          </div>
        @endforeach
		</form>
	</div>
  </body>
</html>
