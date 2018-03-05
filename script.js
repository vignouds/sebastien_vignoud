$(function() {
	$('#cv').load('cv.html #sect1', function(){});

	$('#cvGlobal').click(function(){
		$('#cv').load('cv.html #sect1', function(){});
	});

	$('#info').click(function(){
		$('#cv').load('cv.html #sect2', function(){});
	});
});