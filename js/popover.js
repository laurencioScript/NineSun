//pop-over para o botão Classificação
$(document).ready(function() {
		  $(document).on('click', '#okClass',function(){
		  	adicionaFiltroClassificacao();
		  });
		  $('.btn-open-popover').popover();

		  // //popover option
		  $("#popover-class").popover({
		    title: 'Classificação',
		    content: $('#divContentHTML').html(),
		    placement: 'top',
		    html: true
		  }); 
});

//pop-over para o botão Cidade
$(document).ready(function() {
		  $(document).on('click', '#okCidade',function(){
		  	adicionaFiltroCidade();
		  });
		  $('.btn-open-popover').popover();

		  // //popover option
		  $("#popover-cida").popover({
		    title: 'Cidade',
		    content: $('#div-content-cidade').html(),
		    placement: 'top',
		    html: true
		  }); 
});

//pop-over para o botão tipo
$(document).ready(function() {
		  $(document).on('click', '#okHotel',function(){
		  	adicionaFiltroHotel();
		});
		  $('.btn-open-popover').popover();

		  // //popover option
		  $("#popover-tipo").popover({
		    title: 'Tipo',
		    content: $('#div-content-tipo').html(),
		    placement: 'top',
		    html: true
		  }); 
});

function adicionaFiltroHotel()
{
	//var cars = ["Saab", "Volvo", "BMW"];
	var filtroCheckbox = ["check-hotel", "check-pousada", "check-resort", "check-hotel_fazenda", "check-cama_e_cafe", "check-hotel_historico", "check-flat/apart_hotel"];
	var filtroReceptor = ["filtro-hotel", "filtro-pousada", "filtro-resort", "filtro-hotel_Fazenda", "filtro-cama_e_Cafe", "filtro-hotel_Historico", "filtro-flat/apart_Hotel"];
	var checkbox;
	var mostrador;
	for (var i = 0; i <= 6; i++) 
	{
		checkbox = document.getElementById(filtroCheckbox[i]);
		mostrador = document.getElementById(filtroReceptor[i]);
		if (checkbox.checked == true)
		{
			mostrador.style.display = "block";
		}
		else
		{
			mostrador.style.display = "none";
		}
	}
		
}

function adicionaFiltroClassificacao()
{
	//var cars = ["Saab", "Volvo", "BMW"];
	var filtroCheckbox = ["estrela-5", "estrela-4", "estrela-3", "estrela-2", "estrela-1"];
	var filtroReceptor = ["filtro-5-estrelas", "filtro-4-estrelas", "filtro-3-estrelas", "filtro-2-estrelas", "filtro-1-estrelas"];
	var checkbox;
	var mostrador;
	for (var cont = 0; cont <= 4; cont++) 
	{
		checkbox = document.getElementById(filtroCheckbox[cont]);
		mostrador = document.getElementById(filtroReceptor[cont]);
		if (checkbox.checked == true)
		{
			mostrador.style.display = "block";
		}
		else
		{
			mostrador.style.display = "none";
		}
	}
		
}

function adicionaFiltroCidade()
{
	//var cars = ["Saab", "Volvo", "BMW"];
	var filtroCheckbox = ["check-bertioga", "check-cubatao", "check-guaruaja", "check-itanhaem", "check-mongagua", "check-peruibe", "check-praia_grande", "check-santos", "check-sao_vicente"];
	var filtroReceptor = ["filtro-bertioga", "filtro-cubatao", "filtro-guaruaja", "filtro-itanhaem", "filtro-mongagua", "filtro-peruibe", "filtro-praia_grande", "filtro-santos", "filtro-sao_vicente"];
	var checkbox;
	var mostrador;
	for (var i = 0; i <= 8; i++) 
	{
		checkbox = document.getElementById(filtroCheckbox[i]);
		mostrador = document.getElementById(filtroReceptor[i]);
		if (checkbox.checked == true)
		{
			mostrador.style.display = "block";
		}
		else
		{
			mostrador.style.display = "none";
		}
	}
}

