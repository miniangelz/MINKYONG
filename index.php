<?php
	include("db.php");
?>
<html>
    <head>
       <title>SE Project</title>
        <!-- RESET CSS -->
        <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
        <!-- RECURSION's style -->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <!-- Google Font APIs -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'/>

        <!-- Backend Update -->
        <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js" language="javascript" type="text/javascript"></script>
		<script>
			function callOrderList()
			{
				var url="./backend/order.php";
				new Ajax.Request(url, {
					method: 'get',
					onSuccess: function(transport) {

						// handle the server response
						var response = transport.responseText.evalJSON();
						updateOrderList(response);
						noerror = true;
					},
					onComplete: function(transport) {
						setTimeout( "callOrderList();", 1000); 
					}
				});
			}
			function updateOrderList(response)
			{	
				$('orderList').update(response);
			}
			callOrderList();
		</script>
        <!-------------------->
    </head>
    <body>
        <?php
			include("header.php");
		?>
		<div class="contents_field">

			<div class="left-middle-right_box">
				<div class="left">
					<div class = "order-list" id="orderList">

					</div>
				</div>
				<div class="middle">
					<div class = "order">test Middle</div>
				</div>
				<div class="right">
					<div class = "order">test Right</div>
				</div>

			</div>
		</div>
		<br>
		<?php
			include("footer.php");
		?>
    </body>
</html>
