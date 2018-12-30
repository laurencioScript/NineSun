function centraliza()
{
	var pegaTela = (window.screen.availHeight/4)/5;

	$("#centralizador").css('margin-top', pegaTela);
}

setTimeout(centraliza(), 500);
