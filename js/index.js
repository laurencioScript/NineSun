let height = screen.height;
let width = screen.width;

document.getElementById("logo").style.marginTop = (height/9)+'px';

//console.log((height/9)+'px');

$('#btn_fale_conosco').click(function(){	

	window.location.href = "MODULO_fale_conosco/fale_conosco.php";
});

$('#btn_contato').click(function(){	

	window.location.href = "contato.php";
});

$('#btn_duvidas').click(function(){	

	window.location.href = "duvidas.php";
});

$('#btn_sobre').click(function(){	
	window.location.href = "sobre.php";
});
