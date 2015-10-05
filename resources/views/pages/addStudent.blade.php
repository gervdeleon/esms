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
                  <li role="presentation"><a href="/displayStudents">List of Students</a></li>
                  <li role="presentation" class="active"><a href="/addStudent">Add Students</a></li>
                </ul>
                <div class="container-fluid">
                 <div class="row">

<!--                  <div class="col-md-8 col-md-offset-2">
 -->                 <div class="panel panel-default">
                 <div class="panel-heading">Add Students</div>
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

                 
                 {!! Form::model(['route'=>['addStudent'], 'class'=>'form-horizontal']) !!}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <div class="form-group">
                    {!! Form::label('StudentID', 'Student ID Number', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!!Form::text('studentID', null, ['class' =>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('Firstname', 'Firstname', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!!Form::text('firstname', null, ['class' =>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('Lastname', 'Lastname', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!!Form::text('lastname', null, ['class' =>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('MiddleName', 'Middle Name', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!!Form::text('middlename', null, ['class' =>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('Department', 'Department', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    <select class="form-control" name="department">
                    <option value="CICCT">College of Information, Computer and Communications Technology</option>
                    <option value="COE">College of Education</option>
                    <option value="COC">College of Commerce</option>
                    <option value="CAS">College of Arts and Sciences</option>
                    <option value="CoEngg">College of Engineering</option>
                    <option value="CON">College of Nursing</option>
                    <option value="School of Law">School of Law</option>
                    <option value="Graduate School">Graduate School</option>
                 </select>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('Course', 'Course', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!!Form::text('course', null, ['class' =>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('Year', 'Year', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!!Form::text('year', null, ['class' =>'form-control'])!!}
                    </div>
                </div>
                    <div class="form-group">
                        {!! Form::submit('Add Student', ['class' => 'btn btn-primary form-control']) !!}
                    </div>

                 {!! Form::close() !!}

                 </div>
                 </div>
                 </div>
                 </div>
                 </div>
            </div>
        </div>
    </header>

@stop