<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ESMS</title>

    <!-- Bootstrap Core CSS -->
    {!!HTML::style('css/bootstrap.css')!!}

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    {!!HTML::style('font-awesome/css/font-awesome.min.css')!!}

    <!-- Plugin CSS -->
    {!!HTML::style('css/animate.min.css')!!}

    <!-- Custom CSS -->
    {!!HTML::style('css/creative.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


    @yield('content')

    <!-- jQuery -->
    {!!HTML::script('js/jquery.js')!!}

    <!-- Bootstrap Core JavaScript -->
    {!!HTML::script('js/bootstrap.min.js')!!}

    <!-- Plugin JavaScript -->
    {!!HTML::script('js/jquery.easing.min.js')!!}
    {!!HTML::script('js/jquery.fittext.js')!!}
    {!!HTML::script('js/wow.min.js')!!}

    <!-- Custom Theme JavaScript -->
    {!!HTML::script('js/creative.js')!!}

</body>
</html>
