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
    @foreach ($data as $d)
      <div class="card back">
  		  <h5 class="card-header">{{$d['name']}}</h5>
        <h5>قیمت: {{$d['price']}}</h5>
        <h4>لیست ویژگی ها :</h4>
  		  @foreach ($d['atts'] as $a)
          <h5> {{$a['name']}}</h5>
        @endforeach
      </div>
    @endforeach
  </body>
</html>
