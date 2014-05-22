function add_participant(url)
	{
		// "middleman.php" should be replaced with a url where the PHP script could be found
		var response = $.get("middleman.php", {"site":url}, function(results){
			alert(results); // middleman gives Response Page's HTML to jQuery
		});
		
		//return false;
	}
	
	function start_conference()
	{
		var participant1 = "&num=" + "359884494082";
		var participant2 = "&num=" + "359894528006";
		// Replace 11111 with the numbers of the participants;
		
		// Token for scripting
		// var token = "79626e4c6d794265596e64484c596a706f7969784573704a63756c594d5577636b6950635a4952556d4b7065";
		
		// Token for WebAPI
		var token = "547a727a446c41484d5961596476545377626d51687a587446615967535a514d684775667057474e54546173";
		
		var base_url = "https://tropo.developergarden.com/api/sessions?action=create&token=";
		
		var url = base_url + token;
		
		add_participant( url + participant1 );
		add_participant( url + participant2 );
		
		return false;	
	}