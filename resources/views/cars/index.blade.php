<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<center><h3>cars list</h3></center>
@if(session('response'))
  <div class="alert alert-success">{{session('response')}}</div>
@endif
<div class="container">
	<div class="col-md-4">
<table class="table table-striped">
	 <thead>
    <tr>
      <th scope="col">Car name</th>
  </tr>
</thead>
<tbody>
	@foreach($cars as $car)
	<tr>
		
      <td><a href="cars/{{$car->id}}">{{$car->name}}</a></td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
</div>



