$(document).ready(function() {
	path = window.location.pathname;
	chunks = path.split('/');
	
	if(chunks[3] == '') {
		page = 'index.php';
	} else {
		page = chunks[3];
	}
		
	$.each($('nav .nav li'), function(index, value) {
		kids = $(this).children();
		href = kids.eq(0).attr('href');
		chunks = href.split('/');		
		link = chunks[1];
		
		if(link == page) {
			$(this).attr('class', 'active');
		}
	});
});