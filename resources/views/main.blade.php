@extends('dashboard')

@section('content')

	<div class="container-fluid text-left">
		<ul class="list-group list-group-flush">
		  	<li class="list-group-item">
		 		<a href="kishan.html">
		 			<label class="container">this is my first to do
  					<input type="checkbox">
  					<span class="checkmark"></span>
				</label>
		 		</a>
		  		
		  	</li>
		  	<li class="list-group-item">
		 		<a href="kishan.html">
		 			<label class="container">this is my second to do
  					<input type="checkbox">
  					<span class="checkmark"></span>
				</label>
		 		</a>
		  		
		  	</li>
		  	<li class="list-group-item">
		 		<a href="kishan.html">
		 			<label class="container">this is my third to do
  					<input type="checkbox">
  					<span class="checkmark"></span>
				</label>
		 		</a>
		  		
		  	</li>
		  	<li class="list-group-item">
		 		<a href="kishan.html">
		 			<label class="container">this is my last to do
  					<input type="checkbox">
  					<span class="checkmark"></span>
				</label>
		 		</a>
		  		
		  	</li>
  	<input type="text" name="todobox" placeholder=" + Add To-DO" style="border:0; width:80%; font-size: 20px; margin-left: 3rem; margin-top: 1rem; ">
  </li>
</ul>
	</div>



@endsection