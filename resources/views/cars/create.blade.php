<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<center><h1>Create</h1></center>

		@if(count($errors) > 0)
				@foreach($errors->all() as $error)
							<div class="alert alert-danger">{{$error}}</div>
				@endforeach
		@endif

		@if(session('response'))
			<div class="alert alert-success">{{session('response')}}</div>
		@endif


<center>
<form method="POST" action="{{route('cars.store')}}"> {{--cars--}} {{--my own type route('cars.store') in vid it cars,car/public/create etc--}}
@csrf

	<div class="form-group">
		<label class="col-md-4 control label" for="name">Car Name</label>
		<div class="col-md-4">
			<input type="text" id="" name="name" placeholder="enter car name" class="form-control-input-md"></div>
		
		

		<label class="col-md-4 control label" for="name">Color</label>
		<div class="col-md-4">
			<input type="text" id="" name="color" placeholder="enter color" class="form-control-input-md"></div>
		</div>
		

		<label class="col-md-4 control label" for="name">Company</label>
		<div class="col-md-4">
			<input type="text" id="" name="company" placeholder="enter name" class="form-control-input-md"></div>
		</div>
		<br>
		<button type="submit" class="btn btn-success">Save</button>

		</div>
	</form>

	
</center>
<div class="container">
<div class="col-md-4">
<div class="links">
                    <a href="/cars">Show Cars</a> {{--cars--}}
                </div>
            </div>

        </div>