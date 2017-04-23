$(document).ready(function() {
	$('#cancel').click(function() {
		var pid = $('#cancel').val();
		$.ajax({
			type: 'POST',
			url: 'Haaleta/cancelVote',
			dataType: 'text',
			data: {id:pid},
			success: function(data) {
				location.reload();
			}
			});
	});
	
	
	$('#vote').click(function() {
		var pid = $('#vote').val();
		var cand = $('#cand').val();
		
		$.ajax({
			type: 'POST',
			url: 'Haaleta/handVote',
			dataType: 'text',
			data: {vote: cand, id:pid},
			success: function(data) {
				location.reload();
			}
			});		
	});
	
});