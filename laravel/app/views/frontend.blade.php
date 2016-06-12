<?php
/*
 *	Frontend template file
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
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

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

 		<meta property="og:title" content="">
		<meta property="og:site_name" content="">

		<meta property="og:description" content="">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo url(); ?>/{{ Request::path() }}">
		<meta property="og:image" content="">


		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Culex d.o.o., info@culex.hr">
		<meta name="Publisher" content="">

		<link rel="icon" href="{{ URL::asset('favicon.png') }}">
		<!--[if IE]><link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}"><![endif]-->

		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="{{ URL::asset('favicon.png') }}">

		<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('favicon.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('favicon.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('favicon.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('favicon.png') }}">
 
		{{-- Load the Modernizr before everything, for feature detection --}}
		{{ HTML::script('js/core/modernizr.js') }}
   		<!-- jQuery 2.1.4 -->
		{{ HTML::script('js/core/jquery.min.js') }}
  		<!-- jQuery UI 1.11.4 -->
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	    <script>
	      $.widget.bridge('uibutton', $.ui.button);
	    </script>
   		<!-- Bootstrap 3.3.5 -->
		{{ HTML::style('css/core/bootstrap.min.css') }}
    	<!-- Font Awesome -->
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    	<!-- Ionicons -->
    	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   		<!-- AdminLTE skin -->
   		{{ HTML::style('css/core/AdminLTE.min.css') }}
   		<!-- Skin for AdminLTE -->
   		{{ HTML::style('css/core/skin-green.min.css') }}
   		<!-- Core CSS -->
   		{{ HTML::style('css/core/core.css') }}
   		<!-- Animate CSS -->
    	{{ HTML::style('css/core/animate.css') }}

		{{-- Loop that implements additional CSS for a module and/or view --}}
		@if (isset($css_files) && is_array($css_files))
			@foreach  ($css_files as $css_file)
		{{ HTML::style($css_file) }}
			@endforeach
		@endif

		{{ HTML::script('js/core/jquery.noty.packaged.min.js') }}
		{{ HTML::script('js/core/noty.app.theme.js') }}


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


	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>
	<body  @if(Route::getCurrentRoute()->getPath() === 'sign-in') class="login-page" @endif @if(Route::getCurrentRoute()->getPath() === 'register') class="register-page" @endif>
 			 <!-- Your Page Content Here -->
			
				{{ $content or null }}
		 

 			<!-- End page content  -->

 			{{-- Loop that implements additional footer JS for a module or specific view --}}
			@if (isset($js_footer_files) && is_array($js_footer_files))
				@foreach ($js_footer_files as $js_file)
				{{ HTML::script($js_file) }}
				@endforeach
			@endif
 			<!-- REQUIRED JS SCRIPTS -->


   			<!-- Bootstrap 3.3.5 -->
			{{ HTML::script('js/core/bootstrap.min.js') }}
			<!-- Slimscroll -->
		    {{ HTML::script('js/core/jquery.slimscroll.min.js') }}
		    <!-- FastClick -->
		   	{{ HTML::script('js/core/fastclick.min.js') }}

	</body>
</html>