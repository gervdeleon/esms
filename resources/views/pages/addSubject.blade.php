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
                        <a class="page-scroll" href="/index">Home</a>
                    </li>
                    <li><a href="/displayStudents">Students</a></li>
                    <li><a href="/display">Subjects</a></li>
                    <li><a href="/addMarks">Marks</a></li>
                    <li><a href="/addAssignments">Assignments</a></li>
                    <li><a href="/addExamSchedule">Exam Schedule</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <ul class="nav nav-tabs">
                  <li role="presentation"><a href="/display">List of Subjects</a></li>
                  <li role="presentation" class="active"><a href="/addSubjects">Add Subjects</a></li>
                </ul>
                <div class="container-fluid">
                 <div class="row">
                 <div class="panel panel-default">
                 <div class="panel-heading">Add Subject</div>
                 <div class="panel-body" style="max-height: 400px; overflow-y: scroll;">
                					
                     @if (count($errors) > 0)
                	 <div class="alert alert-danger">
                	 <strong>Whoops! </strong> There were some problems with your input. <br> <br>
                	 <ul>
                	
                            @foreach ($errors->all() as $error)
                		 <li>{{ $error }} </li>
                	    @endforeach
                	 </ul>
                	 </div>
                     @endif
                 <form class="form-horizontal" role="form" method="POST" action="/addSubject">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 <div class="form-group">
                 <label class="col-md-4 control-label">Subject Code</label>
                 <div class="col-md-6">
                 <input type="text" class="form-control" name="subjcode">
                 </div>
                 </div>

                 <div class="form-group">
                 <label class="col-md-4 control-label">Subject Name</label>
                 <div class="col-md-6">
                 <input type="text" class="form-control" name="subjname">
                 </div>
                 </div>

                 <div class="form-group">
                 <label class="col-md-4 control-label">Subject Schedule</label>
                 <div class="col-md-6">
                 <select class="form-control" name="subjsched">
                    <option value="M">Monday</option>
                    <option value="T">Tuesday</option>
                    <option value="W">Wednesday</option>
                    <option value="Th">Thursday</option>
                    <option value="F">Friday</option>
                    <option value="Sat">Saturday</option>
                    <option value="MWF">Monday, Wednesday</option>
                    <option value="MWF">Monday, Friday</option>
                    <option value="MWF">Wednesday, Friday</option>
                    <option value="MWF">Monday, Wednesday, Friday</option>
                    <option value="TTh">Tuesday, Thursday</option>
                    <option value="MTWThF">Monday, Tuesday, Wednesday, Thursday, Friday</option>
                 </select>
                 </div>
                 </div>

                 <div class="form-group">
                 <label class="col-md-4 control-label">Subject Starting Time</label>
                 <div class="col-md-6">
                 <input type="time" class="form-control" name="subjtimestart">
                 </div>
                 </div> 

                 <div class="form-group">
                 <label class="col-md-4 control-label">Subject Ending Time</label>
                 <div class="col-md-6">
                 <input type="time" class="form-control" name="subjtimeend">
                 </div>
                 </div>                 

                 <div class="form-group">
                 <label class="col-md-4 control-label">Subject Teacher</label>
                 <div class="col-md-6">
                 <input type="text" class="form-control" name="subjteach">
                 </div>
                 </div>

                 <div class="form-group">
                 <label class="col-md-4 control-label">Subject Room</label>
                 <div class="col-md-6">
                 <input type="text" class="form-control" name="subjroom">
                 </div>
                 </div>

                 <div class="form-group">
                 <div class="col-md-6 col-md-offset-4">
                 <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                	Add Subject
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
    </header>

@stop