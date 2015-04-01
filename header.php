<script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js" language="javascript" type="text/javascript"></script>
<script>
	function callTime()
	{
		var url="./backend/time.php";
		new Ajax.Request(url, {
			method: 'get',
			onSuccess: function(transport) {

				// handle the server response
				var response = transport.responseText.evalJSON();
				updateTime(response);
				noerror = true;
			},
			onComplete: function(transport) {
				setTimeout( "callTime();", 1000); 
			}
		});
		//this.ajax.comet = this;
	}
	function updateTime(response)
	{	
		$('time').update(response);
	}
	callTime();
</script>
<div class="header">
	<div class="left-right_Box">
		<div class="left" id="time"></div>
		<div class="right">
			BY SCHOOL OF INFORMATION TECHNOLOGY, KMUTT
		</div>
	</div>
</div>