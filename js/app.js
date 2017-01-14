
$('h1').hide().fadeIn('slow/5000/slow', function() {
	$(this).css('text-shadow','2px 2px 2px orange');
});

var $overlay = $('<div id="overlay"></div>');

var $image = $('<img width="400">');
var $caption = $("<p></p>");

$overlay.append($image);
$overlay.append($caption);


$('body').append($overlay);


//Capture the click event on a link to the image

$('#imageGallery a').click(function(event){
	event.preventDefault();
	var imageLocation = $(this).attr('href');
	$image.attr('src',imageLocation);
	$overlay.show();
	
	var captionText = $(this).children('img').attr("alt");
	$caption.text(captionText);

	});


//1.1 Show the overlay

//1.2 Update overlay with the image linked in the link


//1.3 Get child's alt attribute and set caption

//2 Add an overlay
	//2.1 An image
	//2.2 A caption


//3 When the overlay is clicked
	//3.1 Hide the overlay
	$overlay.click(function(){
		$overlay.hide();
	});