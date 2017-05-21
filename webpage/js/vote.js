$(document).ready(function() {
	$('#cancel').click(function() {
		$.ajax({
			type: 'POST',
			url: 'Haaleta/cancelVote',
			success: function(data) {
				location.reload();
			}
			});
	});
	
	
	$('#vote').click(function() {
		var cand = $('#cand').val();
		$.ajax({
			type: 'POST',
			url: 'Haaleta/handVote',
			dataType: 'text',
			data: {vote: cand},
			success: function(data) {
				location.reload();
			}
			});		
	});
	
});