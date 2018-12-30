function veriHeader()
{
	var url = window.location.href;

	if(url.indexOf("search") == -1)
	{
		$("header").css('background-color', 'whitesmoke');
		return 1;
	}
	else
	{
		$("header").css('background-color', 'whitesmoke');
		return 2;
	}
}
setTimeout(veriHeader(), 500);
