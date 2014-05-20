function startCall()
{
	// replace '111111111' with your number
	var customerNumber = "&num=" + "111111111";
	
	// your Telekom Tropo Token from www.developergarden.com
	var token = "YOUR-TOKEN";
	
	// Specific URL for connection to your Tropo Web API app
	// ************** DO NOT CHANGE !!! ********************
	var base_url = "https://tropo.developergarden.com/api/sessions?action=create&token=";
	
	// Building up the full url
	var url = base_url + token + customerNumber;
	
	var response = $.get("middleman.php", {"site":url}, function(results){
		alert(results); // middleman gives Response Page's HTML to jQuery
	});
	
	return false;	
}