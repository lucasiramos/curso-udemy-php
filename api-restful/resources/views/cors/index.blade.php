<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/app.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
	<script type="text/javascript">
		$(function(){
			$("body").on("click","button", function(){
				$.get("http://corson.com.devel:8080/api/hello", function(data){
					alert(data);
				})
			});
		})
	</script>
</head>
<body>
	<div style="padding: 20px;">
		<button class="btn btn-primary">Click!</button>
	</div>
</body>
</html>