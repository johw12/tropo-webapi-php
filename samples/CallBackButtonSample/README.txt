---------------------------------------------------------
---------------------------------------------------------
**** Requirements:
- in order to run the you will need Tropo WebAPI  app in www.developergarden.com
- you will need a server visible from the Net where you will host the app itself
- configure the paths inside the scripts so the paths point to the currect locations of the scripts

**** Additional information
- for details how to run the sample please visit our tutorials for 
	Telekom tropo at: https://www.developergarden.com/apis/documentation/api/telekom-tropo-documentation/html/index.html

**** How should it work?
- run the HTML via browser
- click on the button
- the JS file contacts the middleman.php 
- middleman.php creates a request to the Telekom Tropo Servers
- They contact voice_call.php for instruction
- Voice_call.php gives instruction to the servers
- The servers start a call between the "customer" and the "call center"