$(document).ready(function() {
			
			$("a.contact").fancybox({
'padding': 10, // optional
'width': 650, //or whatever you like
'height': 350,
'overlayOpacity': '0.8',
'overlayColor': '#000',
'type': 'iframe' ,
'scrolling': 'no'
});		
$("a.box").fancybox({
				'titleShow'		: true,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic',
				'titlePosition'	: 'over',
				 'overlayOpacity': '0.8',
				  'overlayColor': '#000'
			});
			
			$("a[rel=group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
		});
			