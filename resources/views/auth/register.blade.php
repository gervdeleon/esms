@extends('master')

@section('content')
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ESMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/landing">Home</a>
                    </li>
                    <li>
                        <a href="{{URL::route('login')}}">Login</a>
                    </li>
                    <li>
                        <a href="{{URL::route('register')}}">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="container-fluid">

                <div class="container-fluid">
                <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="panel-heading">Parent Registration</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                         @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                         @endforeach

                </ul>
                </div>

                    @endif

                <form class="form-horizontal" role="form" method="POST" action="/auth/register
                ">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                <label class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                </div>
                    
                <div class="form-group">    
                <label class="col-md-4 control-label">Email Address</label>
                <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
                </div>

                <div class="form-group">    
                <label class="col-md-4 control-label">Student Number</label>
                <div class="col-md-6">
                <input type="text" class="form-control" name="studentID" value="{{ old('studentID') }}">
                </div>
                </div>

                <div class="form-group">
                <label class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                <input type="password" class="form-control" name="password">
                </div>
                </div>

                <div class="form-group">
                <label class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                Register
                </button>
                                            
                </div>
                </div>
                </form>

                </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </header>

@stop