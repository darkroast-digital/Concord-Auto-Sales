<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<!-- Viewport Meta -->

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Mobile Theme Colour -->

	<meta name="theme-color" content="#F56D37">
	
	<!-- Title and Description -->

	<title>
	<?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?>
	</title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
	
	<!-- Favicons -->
	
	<link rel="apple-touch-icon" href="">
	<link rel="icon" href="../assets/img/fav.png">
	
	<!-- Open Graph -->

	<meta property="og:title" content="Concord Auto Sales">
	<meta property="og:description" content="">
	<meta property="og:type" content="Concord Auto Sales hundreds of quality used cars to choose from">
	<meta property="og:url" content="ckautosales.ca">
	<meta property="og:site_name" content="Concord Auto Sales">
	<meta property="og:image" content="../assets/img/og-image.jpg">

	<!-- Material Icons -->

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<!-- Font Awesome -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
	
	<?php echo css('assets/css/style.css') ?>
	
	<!--[if lt IE 9]>
     <script src="js/polyfill/html5-shiv.js"></script>
  <![endif]-->

</head>

<body>

	<!--[if IE]>
      <div class="browserupgrade"><p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p></div>
   <![endif]-->