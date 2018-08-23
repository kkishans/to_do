@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
           
                <div class="wrapper">
                    <nav id="sidebar">
                        <ul class="list-unstyled components">
                            <li class="active">
                                <a href="#" class="nav-link text-dark">My Day</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-dark"><img src="{{ asset('img/to_do.png') }}" width="12%">To-Do</a>
                            </li>
                            <hr>
                            <li>
                                <a href="#" class="nav-link text-dark"><img src="{{ asset('img/add-list.png') }}" width="12%">New-List</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            
        </div>
        <div class="col-sm-8" style="padding: .5rem;">
            <div class="container-fluid">
            <div class="list-group">

  <a href="kishan.html" class="list-group-item list-group-item-action">
  <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">this is my todo list</span>
</label>
</a>

<input type="text-box" name="text-box" class="form-control" autofocus placeholder="+ Add To-Do" style="margin-top: .1rem;">
  <!-- <a href="#" class="list-group-item list-group-item-action">Show TV shows</a>
  <a href="#" class="list-group-item list-group-item-action">Take dinner</a>
  <a href="#" class="list-group-item list-group-item-action">Do work on to-do project</a> -->
        </div>
                    
            </div>
        </div>
    </div>
</div>


@endsection
