$('#btn_submit').click(function()
		{search_data($("#ip_serach").val()
	)});

function search_data(value){
		$.ajax({
			url: 'php/search.php',		
			type: 'POST',
			dataType: 'html',
			before: function(){$("#content").html("Loading ...");},
			data :{keyword : value},
			success: function(msg){$("#content_search").html(msg);} 	
		});}
        
	

		
