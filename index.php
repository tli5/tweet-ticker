<!DOCTYPE HTML>
<html>
<head>

<meta charset="UTF-8">
<title>Web Science Lab 1</title>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- custom scripts -->
<script src="./js/tweets_ticker.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- Google Maps API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO4-uh2C2Cpon5LB7NTosT_lVl3mxAOu8"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- custom CSS -->
<link rel="stylesheet" href="./css/tweets_ticker.css">

</head>

<body>
<figure class="panel panel-info col-xs-4 col-xs-offset-1 map-figure">
	<figure class="panel-heading text-center" id="canvas_title">Map (Click the Blue Tweets)</figure>

	<figure class="col-xs-12 panel panel-success" id="canvas" >
		
	</figure>

</figure>

<section class="panel panel-primary col-xs-6">
	<section class="panel-heading text-center" id="tweets" >Tweets</section>

	<section class="col-xs-6 panel panel-success" id="tweet-section">
		<section class="panel-heading text-center">Tweet Messages</section>
		<section class="panel panel-successtemplate col-xs-12 template" id="tweet-template">
			<img src="./images/icon.png"  class="col-xs-3 img-circle" >
			<em class="tweet-text col-xs-9">template</em>
		</section>
	</section>

	<section class="col-xs-6 panel panel-info" id="tags">
		<section class="panel-heading text-center">Hashtags</section>
		<section class="panel panel-info template col-xs-12" id="tag-template">
			<em class="tweet-text col-xs-12">template</em>
		</section>
	</section>
</section>

</body>

</html>