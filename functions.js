function toggles(id)
{
	$.('#'+id).on('click',function(e)
	{
		if($.('#'+id).style.display=='none')
		{
		document.getElementById(id).style.display='block';
		}
		else{
		document.getElementById(id).style.display='none';	
		}

	});
}