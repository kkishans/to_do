@extends('dashboard')

@section('content')

	<div class="container-fluid text-left">
		<ul class="list-group list-group-flush">
		  	<form id="form" >
					<div class="input-group">
						<input type="text" id ="input" name="todobox" placeholder=" + Add To-DO" style="border:0; width:80%; font-size: 20px; margin-left: 3rem; margin-top: 1rem; ">
						<span>
							<button id="btn" type="button" class="btn btn-primary" style=" margin-left: 3rem; margin-top: 1rem; ">Submit</button>
						</span>
				</div>			     
			</form>
		</ul>
	</div>
	<div class="row">				
				<ul id="list" type="none" class="list-group list-group-flush">
					<li ><input type="checkbox" class="checkbox" hidden></li>
				
				</ul>
			</div>
			<div class="row">
				<button id="btnClr" type="button" class="btn btn-primary mx-auto btnHide">Clear</button>
			</div>				
		</div>
	</div>



@endsection