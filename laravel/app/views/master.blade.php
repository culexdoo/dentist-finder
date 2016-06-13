<?php
/*
 *	Master template file
 *
 *	Contains variables for content input
 *	-	$title				-	string	-	Page title, for <title> and og:title (if not default)
 *	-	$css_files			-	array	-	list of additional CSS files
 *	-	$js_header_files	-	array	-	list of additional JS files
 *	-	$js_footer_files	-	array	-	list of additional JS files
 *	-	$body_content		-	boolean -	false if body tag should be empty of HTML tags, except
 *											footer JS and Google Analytics
 */
?>
 
<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" class="no-js">

<head>
    <meta charset="UTF-8">

	<?php
		if (isset($title))
		{
			$final_title = $title;
		}
		else
		{
			$final_title = Lang::get('core.app_title');
		}
	?>

	<title>{{ $final_title }}</title>

	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <meta name="description" content="Dentist finder">

    <meta name="keywords" content="dentist, dentist finder">

 	<meta name="author" content="Culex d.o.o., info@culex.hr">

	<link rel="icon" href="{{ URL::asset('favicon.png') }}">

	<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('favicon.png') }}">

	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('favicon.png') }}">

	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('favicon.png') }}">

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('favicon.png') }}">

    <!-- jQuery 2.0.2 -->
	{{ HTML::script('js/backend/jquery.min.js') }}

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 
	{{-- Load the Modernizr before everything, for feature detection --}}
	{{ HTML::script('js/backend/modernizr.js') }}

    <!-- bootstrap 3.0.2 --> 
	
	{{ HTML::style('css/backend/bootstrap.min.css') }}
   
    <!-- font Awesome -->

	{{ HTML::style('css/backend/font-awesome.min.css') }}

    <!-- Ionicons -->

	{{ HTML::style('css/backend/ionicons.min.css') }}

    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- Theme style -->
	
	{{ HTML::style('css/backend/style.css') }}

    <!-- Custom style -->

	{{ HTML::style('css/backend/custom.css') }}


	{{-- Loop that implements additional CSS for a module and/or view --}}
	@if (isset($css_files) && is_array($css_files))
		@foreach  ($css_files as $css_file)
	{{ HTML::style($css_file) }}
		@endforeach
	@endif

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

	{{ HTML::script('js/backend/jquery.noty.packaged.min.js') }}
	{{ HTML::script('js/backend/noty.app.theme.js') }}


	{{-- Loads default path to a JS variable (no trailing slash) --}}
	<script>
	var rootPath = "{{{ url('/') }}}";
	</script>


	{{-- Loop that implements additional header JS for a module and/or view --}}
	@if (isset($js_header_files) && is_array($js_header_files))
		@foreach ($js_header_files as $js_file)
	{{ HTML::script($js_file) }}
		@endforeach
	@endif

</head>

<body class="skin-black">
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="{{ URL::route('getDashboard') }}" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
            
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        {{ HTML::image('img/avatar2.png', 'Josip Čes', array('class' => 'img-circle')) }}  
                    </div>
                    <div class="pull-left info">
                        <p>Josip Čes</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <a href="{{ URL::route('getDashboard') }}">
                            <i class="fa fa-dashboard"></i> <span>Početna</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::route('DentistIndex') }}">
                            <i class="fa fa-male"></i> <span>Zubari</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::route('PatientIndex') }}">
                            <i class="fa fa-user"></i> <span>Pacijenti</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::route('BlogIndex') }}">
                            <i class="fa fa-book"></i> <span>Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::route('QuoteIndex') }}">
                            <i class="fa fa-asterisk"></i> <span>Upiti</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::route('ReviewIndex') }}">
                            <i class="fa fa-comment"></i> <span>Recenzije</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content">

	          	<!-- Your Page Content Here -->
			
					{{ $content or null }}
		
 				<!-- End page content  -->

            </section>
            <!-- /.content --> 

        </aside>
        <!-- /.right-side -->

       	<footer>
	      	<div class="row">
	            <div class="footer-main">
	                Copyright &copy dentist-finder, 2016 | Developed by <a href="http://culex.hr/" target="_blank">Culex</a>
	            </div>
	        </div>
		</footer>

    </div>

    <!-- ./wrapper -->





    <!-- Le javascript --> 


 	<!-- App js -->

 	{{ HTML::script('js/backend/app.js') }}



	@if (Session::has('message'))
	<script>
	var n = noty({
		text: '{{{ Session::get('message') }}}',
		type: 'alert', // Alert, Success, Error, Warning, Information, Confirm
		theme: 'app', // or 'defaultTheme'
		layout: 'bottomRight', // top - topLeft - topCenter - topRight - center - centerLeft - centerRight - bottom - bottomLeft - bottomCenter - bottomRight
		animation: {
			open: 'animated bounceInUp',
			close: 'animated bounceOutDown',
		}
	});
	</script>
	@endif

	@if (Session::has('error_message'))
	<script>
	var n = noty({
		text: '{{{ Session::get('error_message') }}}',
		type: 'error',
		theme: 'app',
		layout: 'bottomRight',
		animation: {
			open: 'animated bounceInUp',
			close: 'animated bounceOutDown',
		}
	});
	</script>
	@endif

	@if (Session::has('info_message'))
	<script>
	var n = noty({
		text: '{{{ Session::get('info_message') }}}',
		type: 'information',
		theme: 'app',
		layout: 'bottomRight',
		animation: {
			open: 'animated bounceInUp',
			close: 'animated bounceOutDown',
		}
	});
	</script>
	@endif

	@if (Session::has('warning_message'))
	<script>
	var n = noty({
		text: '{{{ Session::get('warning_message') }}}',
		type: 'warning',
		theme: 'app',
		layout: 'bottomRight',
		animation: {
			open: 'animated bounceInUp',
			close: 'animated bounceOutDown',
		}
	});
	</script>
	@endif

	@if (Session::has('success_message'))
	<script>
	var n = noty({
		text: '{{{ Session::get('success_message') }}}',
		type: 'success',
		theme: 'app',
		layout: 'bottomRight',
		animation: {
			open: 'animated bounceInUp',
			close: 'animated bounceOutDown',
		}
	});
	</script>
	@endif


    {{-- Loop that implements additional footer JS for a module or specific view --}}
	@if (isset($js_footer_files) && is_array($js_footer_files))
		@foreach ($js_footer_files as $js_file)
		{{ HTML::script($js_file) }}
		@endforeach
	@endif


</body>

</html>











 