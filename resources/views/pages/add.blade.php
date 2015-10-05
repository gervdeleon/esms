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
                  <li role="presentation" class="active"><a href="subjects.index">List of Subjects</a></li>
                  <li role="presentation"><a href="/addSubjects">Add Subjects</a></li>
                </ul>
                 <div class="panel panel-default">
                 <div class="panel-heading">List of Subjects</div>
                 <div class="panel-body" style="max-height: 400px; overflow-y: scroll;">
                 <table>
                  <tr>
                    <th class="col-md-2" align="left"><h5>Subject Code</h5></th>
                    <th class="col-md-2" align="left"><h5>Subject Name</h5></th>
                    <th class="col-md-2" align="left"><h5>Subject Day</h5></th>
                    <th class="col-md-2" align="left"><h5>Starting Time</h5></th>
                    <th class="col-md-2" align="left"><h5>Ending Time</h5></th>
                  </tr>
                @foreach($subjects as $subject)
                <tr><td class="col-md-2" align="left"><h5>{{ $subject->subjectCode }}</h5></td>
                    <td class="col-md-2" align="left"><h5>{{ $subject->subjectName }}</h5></td>
                    <td class="col-md-2" align="left"><h5>{{ $subject->subjectSchedule }}</h5></td>
                    <td class="col-md-2" align="left"><h5>{{ date('h:i:s A', strtotime($subject->subjectTimeStart)) }}</h5></td>
                    <td class="col-md-2" align="left"><h5>{{ date('h:i:s A', strtotime($subject->subjectTimeEnd)) }}</h5></td>
                    <td class="col-md-2" align="left"><a href="{{ route('subjects.edit', $subject->subjectCode)}}" class="btn btn-info">Edit Subject</a></td>
                    <td class="col-md-2" align="left"><a href="{{URL::route('deleteSubject', $subject->subjectCode)}}" class="btn btn-danger">Delete Subject</a></td>
                    </tr>
                 @endforeach
                </table>
            </div>
            </div>
            </div>    
        </div>
    </header>

@stop