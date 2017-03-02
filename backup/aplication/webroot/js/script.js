function applyCountDown()
{
	/*$('#defaultCountdown').countdown({until: endDay});*/
	$('#year').text(endDay.getFullYear());	
        
        $('#defaultCountdown').countdown({until: endDay, format: 'DHMS', 
            layout: '<div class="count"><div class="dias">{dn}{dl}</div><div class="resto">{hn}{hl} {mn}{ml} {sn}{sl}</div></div>'});       
}