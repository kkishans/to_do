@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="container">
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
        </div>
        <div class="col-sm-8">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        hiiiiiiiiiiiiiiiiii
                        hi
                    </div>    
                    <div class="col-sm-12">
                        hi
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
