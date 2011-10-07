$(document).ready(function(){

	var tabs_with_errors = new Array();
	var error_message = "";
	
	$("#holder").children().each(function()
	{
		if($(this).find(".notice").length > 0)
		{
			tabs_with_errors.push($(this).attr("id"));
		}
	});
	
	if(tabs_with_errors.length > 0)
	{
		for(e=0; e<tabs_with_errors.length; e++)
		{
			em = tabs_with_errors[e].replace("menu_", "")
			em = em.replace(/_/g, " ");
			
			error_message += "<li><strong>" + em + "</strong></li>";
		}
		
		error_message = "<div id=\"ep_mega_error\"><h1>Whoops! There seems to be a problem with this entry</h1><p>It looks like there are errors on following tabs:</p><ul>" + error_message + "</ul><p>Could you double check the form and re-submit, thanks.</p></div>";
		
		$('.publishPageContents').before(error_message);
	}
	
});