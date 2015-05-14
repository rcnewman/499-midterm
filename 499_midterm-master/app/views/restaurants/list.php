<!doctype html>
<html>
<head>
	<title>Yelp</title>
</head>
<body>
<h1>Yelp</h1>
<?php foreach ($restaurants as $restaurant) : ?>
	<hr>
	<div>
		<h3><?php echo $restaurant->restaurant_name . ' (' . $restaurant->city . ')';?></h3>
		<p><?php echo $restaurant->type;?></p>
		<p><?php if($restaurant->facebook_page != null){
					echo 'Facebook Page: <a href="http://facebook.com/'. $restaurant->facebook_page . '">here</a>';
				} else {
					echo 'Not on Facebook';
				} ?>
			</p>
		<p><?php echo '<a href="/restaurants/'.$restaurant->id.'/reviews">View Reviews</a>';?></p>

	</div>
<?php endforeach;?>
</body>
</html>