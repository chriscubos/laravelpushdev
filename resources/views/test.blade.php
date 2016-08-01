<!DOCTYPE html>
<head>
	<title>Pusher Test</title>
	<script src="https://js.pusher.com/3.1/pusher.min.js"></script>
	<script>

		// Enable pusher logging - don't include this in production
		Pusher.logToConsole = true;

		var pusher = new Pusher('2c0f11db406fa7bc4e76', {
			encrypted: true
		});

		var channel = pusher.subscribe('test_channel');
		channel.bind('my_event', function(data) {
			alert(data.message);
		});
	</script>
</head>