$(".btn_plus_info").click(function(event) {
	let row_grid = $(this).parent().parent().parent();
	let array = row_grid.children();
	let sub_menu = array[1];
	console.log(sub_menu);
	$(sub_menu).addClass( "col-md-offset-3  col-md-6" );
	$(sub_menu).attr('id','sub_grid');

	$.ajax({
        url: 'php/grid/sub_grid.php',     
        type: 'POST',
        dataType: 'html',
        success: function(msg){$("#sub_grid").html(function(){return msg});}
    });

    setTimeout(function(){
    	$('#myTabs').click(function (e) {
    		e.preventDefault()
    		$(this).tab('show')
    	})
    	$('#btn-fechar').click(function (e) {
    		let subGrid =  $(this).parent().parent().parent()[0];
    		$($(this).parent().parent().parent()[0]).removeAttr("id");
    		$($(this).parent().parent().parent()[0]).removeAttr("class");  
    		$(this).parent().parent()[0].remove();   
		});

    },200)
});

