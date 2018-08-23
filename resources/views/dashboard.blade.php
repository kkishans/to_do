@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
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
        <div class="col-md-8">
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{ asset('img/back.gif') }}" width="100%" height="150px">
                    </div>   
                    <div class="col-sm-12">
                        hiiiiii
                        hi
                    </div>    
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
