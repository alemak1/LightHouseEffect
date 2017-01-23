<!-- The .php index file will be the homepage in PHP environments -->

<?php
include('inc/header.php');

?>
	<div id="menu">
		<ul>
			<li class="selected"><a href="index.php">Japan</a></li>
			<li><a href="index.php">Taiwan</a></li>
			<li><a href="index.php">China</a></li>
			<li><a href="index.php">Cambodia</a></li>
			<li><a href="index.php">About</a></li>
			<li><a href="index.php">Contact</a></li>
		</ul>

	
	</div>

<h1>Japan Picture Gallery</h1>

<div class="button-group">	
	<button type="submit" id="enlarge-button">Enlarge</button>
	<button type="submit" id="shrink-button">Shrink</button>
</div>

	<ul id="imageGallery">
		<li><a href="img/akihabara_daytime.png"><img src="img/akihabara_daytime.jpg" width="200" alt="Akihabara during Daytime"></a></li>
		<li><a href="img/emperor_palace.png"><img src="img/emperor_palace.jpg" width="170" alt="Emperor's Palace in Tokyo"></a></li>
		<li><a href="img/fish_market.png"><img src="img/fish_market.jpg" width="200" alt="Fish Market in Tokyo"></a></li>
		<li><a href="img/mount_fuji.png"><img src="img/mount_fuji.jpg" width="200" alt="Mount Fuji"></a></li>
		<li><a href="img/sensoji_temple.png"><img src="img/sensoji_temple.jpg" width="170" alt="Sensoji Temple"></a></li>
		<li><a href="img/shunjuku.png"><img src="img/shunjuku.jpg" width="170" alt="Shunjuku during Daytime"></a></li>
		<li><a href="img/sumida1.jpg"><img src="img/sumida1.jpg" width="200" alt="Sumida Fireworks Festival Image 1"></a></li>
		<li><a href="img/sumida2.jpg"><img src="img/sumida2.jpg" width="200" alt="Sumida Fireworks Festival Image 2"></a></li>
		<li><a href="img/sumida3.jpg"><img src="img/sumida3.jpg" width="160" alt="Sumida Fireworks Festival Image 3"></a></li>
		<li><a href="img/ueno_park.png"><img src="img/ueno_park.jpg" width="200" alt="Ueno Park"></a></li>
		<li><a href="img/shunjuku_intersection.png"><img src="img/shunjuku_intersection.png" width="200" alt="Shunjuku Street Intersection"></a></li>
	
	</ul>




	
<?php

include('inc/footer.php');

?>

<script type="text/javascript">
	
	$('#enlarge-button').click(function(){
		$('#imageGallery li').find('img').each(function(){
				$pictureWidth = $(this).attr('width');
				$(this).attr('width',$pictureWidth*1.2);
			});
	});

	$('#shrink-button').click(function(){
			$('#imageGallery li').find('img').each(function(){
			$pictureWidth = $(this).attr('width');
			$(this).attr('width',$pictureWidth*.8);
		});
	});

	

	var $select = $('<select></select>');
	$('#menu').append($select);

		$('#menu a').each(function(){
			var $option = $("<option></option>");
			$option.val($(this).attr('href'));
			$option.text($(this).text());
			$select.append($option);

			if($(this).parent().hasClass('selected')){
				$option.prop('selected',true);
			}
		});

	var $button = $('<button></button>');
	$('#menu').append($button);

	$button.click(function(){

		window.location = $select.val();
	});





	$('h1').hide().fadeIn('slow/5000/slow', function() {
		$(this).css('text-shadow','2px 2px 2px orange');
	});

	var $overlay = $('<div id="overlay"></div>');

	var $image = $('<img width="400">');
	var $caption = $("<p></p>");

	$overlay.append($image);
	$overlay.append($caption);


	$('body').append($overlay);


	$('#imageGallery a').click(function(event){
		event.preventDefault();
		var imageLocation = $(this).attr('href');
		$image.attr('src',imageLocation);
		$overlay.show();
		
		var captionText = $(this).children('img').attr("alt");
		$caption.text(captionText);

		});



		$overlay.click(function(){
			$overlay.hide();
		});
</script>


