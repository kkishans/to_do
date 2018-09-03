@extends('dashboard')

@section('content')

	<div class="container-fluid text-left">

			<div class="row list-group list-group-flush" style=" width:80%; font-size: 20px; margin-left: 3rem; margin-top: 1rem;">				
				<ul id="list" type="none" class="list-group list-group-flush">
					<li ><input type="checkbox" class="checkbox" hidden></li>
				
				</ul>
			</div>


		<ul class="list-group list-group-flush">
		  	<form id="form" >
				<div class="input-group row">
					<div class="col-md-8">
						<input type="text" id ="input" name="todobox" placeholder=" + Add To-DO" style="border:0; width:100%; font-size: 20px; margin-left: 3rem; margin-top: 1rem; ">
					</div>
					<div class="col-md-4">	
					<span>
						<button id="btn" type="button" class="btn btn-primary" style=" margin-left: 3rem; margin-top: 1rem; ">Add to-do</button>
					</span>
				</div>
				 </div>			     
			</form>
		</ul>
	
		
			<div class="row">
				<button id="btnClr" type="button" class="btn btn-primary mx-auto btnHide">All done Remove all</button>
			</div>				
		</div>

@endsection