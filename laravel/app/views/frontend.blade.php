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

    <?php
		if (isset($description))
		{
			$final_description = $description;
		}
		else
		{
			$final_description = Lang::get('core.app_description');
		}
	?>

    <meta name="description" content="{{ $final_description }}">

    <?php
		if (isset($keywords))
		{
			$final_keywords = $keywords;
		}
		else
		{
			$final_keywords = Lang::get('core.app_keywords');
		}
	?>

    <meta name="keywords" content="{{ $final_keywords }}">

 	<meta name="author" content="Culex d.o.o., info@culex.hr">

	<link rel="icon" href="{{ URL::asset('favicon.png') }}">

	<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('favicon.png') }}">

	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('favicon.png') }}">

	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('favicon.png') }}">

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('favicon.png') }}">
 
    <!-- Styles --> 
	
	{{ HTML::style('css/frontend/app.min.css') }} 
	{{ HTML::style('css/frontend/custom.css') }}

    <!-- Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
   
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

    <?php
		if (isset($bodyclass))
		{
			$final_bodyclass = $bodyclass;
		}
		else
		{
			$final_bodyclass = 'nav-on-header';
		}
	?>
 

<body class="{{ $final_bodyclass }}">
    



		{{ $content or null }}
		
   







 	<!-- App js -->

 	{{ HTML::script('js/frontend/app.min.js') }}
 	{{ HTML::script('js/frontend/custom.js') }}
	{{ HTML::script('js/backend/jquery.noty.packaged.min.js') }}
	{{ HTML::script('js/backend/noty.app.theme.js') }}
	
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











 