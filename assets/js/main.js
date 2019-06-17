document.getElementById('a_powered').addEventListener('mouseenter', function(e){
	document.getElementById('span_powered').setAttribute(
		'style', 'font-size: 14px; text-decoration: underline;'
	);
});

document.getElementById('a_powered').addEventListener('mouseleave', function(e){
	document.getElementById('span_powered').setAttribute(
		'style', 'font-size: 14px; text-decoration: none;'
	);
});