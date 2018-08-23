@extends('layouts.app')

@section('content')
<div class="container-fluid col-sm-12">
    <div class="row text-center">
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
            <div class="list-group-flush">

              <a href="#" class="list-group-item list-group-item-action">
              <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">this is my todo list</span>
            </label>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Do Assingment</span>
            </label>
            </a>

             <input type="text" name="text-box" class="form-control" autofocus placeholder="+ Add To-Do" style="margin-top: .5rem; decoration: none; border:0; ">
 
        </div>
                    
            </div>
        </div>
    </div>
</div>


@endsection
