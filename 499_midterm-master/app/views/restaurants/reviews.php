<!doctype html>
<html>
<head>
	<title>Reviews</title>
</head>
<body>
<h1>Reviews for <?php echo $restaurant->restaurant_name;?></h1>
<?php if($restaurant->facebook_page != null)
{?>
		<h2>Facebook Activity</h2>
		<ul>
			<li>Likes: <?php echo $fbpage->likes;?></li>
			<li>Checkins: <?php echo $fbpage->checkins;?></li>
		</ul>
<?php } ?>
<?php foreach ($reviews as $review) : ?>
	<hr>
	<div>
		<?php for($i = 0; $i < $review->rating ; $i++)
		{
			echo '<img src="https://bbpress.org/wp-content/themes/bb-base/images/star.png" />';
		}?>
		<p><?php echo $review->review_description;?></p>		
	</div>
<?php endforeach;?>
</body>
</html>