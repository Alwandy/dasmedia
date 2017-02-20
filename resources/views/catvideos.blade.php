<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>LabSTREAM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="https://cdn.plyr.io/2.0.11/plyr.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css" />
        <script src="js/app.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
@include('header')

    <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="headerjumbo overlay">
    </div>
	<div class="container">
    <div class="container">
     <div class="row">
	 <h1><b>Sub categories</b></h1>
	 @foreach ($subcategories as $subcategory)
	 <h2>{{ $subcategory->sub_name }}</a></h2>
	 <p>{{ $subcategory->sub_desc}}</p>
	 <p>{{ $subcategory->cat_id}}</p>
	 	@endforeach		
	 </div>
					                                            											
	</div>
@include('footer')
    </div> <!-- /container -->
        <script>window.jQuery || document.write('<script src="js/app.js"><\/script>')</script>

		<script src="https://cdn.plyr.io/2.0.11/plyr.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
		<script>
		$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
	autoplay:true,
	autoplayTimeout: 3000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false,
            loop:false
        }
    }
})
</script>
    </body>
</html>
