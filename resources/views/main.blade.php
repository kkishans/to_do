@extends('dashboard')

@section('content')

	<div class="container-fluid text-left">

			


		<ul class="list-group list-group-flush">
		  	<form id="form" >
				<div class="input-group row">
					<div class="input-group mb-3">
  						<input type="text" id ="input" name="todobox" placeholder=" + Add To-Do"  class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" 
  						style="margin-left: 3.5rem; margin-top: 1rem;">
  						<div class="input-group-append" >
   							<button id="btn" type="button" class="btn btn-primary" style="margin-top: 1rem;">Add to-do</button>
  						</div>
					</div>
				 </div>			     
			</form>
		</ul>
	
		
		<div class="row list-group list-group-flush" style=" width:100%; font-size: 20px;">				
				<ul id="list" type="none" >
					<li hidden>
						<div class="custom-control custom-checkbox mr-sm-2">
        					<input type="checkbox" class="custom-control-input">
        				</div>
					</li>
				
				</ul>
			</div>
			<div class="row">
				<button id="btnClr" type="button" class="btn btn-primary mx-auto btnHide" style="margin-top: 1rem; text-align: center;">Remove all</button>
			</div>				
		</div>

@endsection