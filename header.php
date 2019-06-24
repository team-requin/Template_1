<html>
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="/plugins/Smart_Editor/js/HuskyEZCreator.js" charset="utf-8"></script>
	<title><?php echo $title." | ".$site_title; ?></title>
	<style>
		@import url(<?php echo $skin_dir; ?>/default.css) screen and (min-width: 950px);
		@import url(<?php echo $skin_dir; ?>/mobile.css) screen and (max-width: 950px);
	</style>
	
</head>
</body>
    <div id="header">
		<div id="innerDate"></div>
		<?php
		include("only_header.php");
		?>
		<div id="header_text"><a href="/"><?= $title ?></a></div>
	</div>
	<script>
		function autoRefresh_innerDate_div() {
			var d = new Date();
			var currentDate = d.getFullYear() + "-"
			+ ( d.getMonth() + 1 ) + "-"
			+ d.getDate() + ", ";
			var currentTime =
			d.getHours() + ": "
			+ pad(d.getMinutes(), 2) + ": "
			// + d.getMinutes() + ": "
			+ d.getSeconds();
			var result = document.getElementById("innerDate");
			result.innerHTML = currentDate + currentTime;
		}

		setInterval(() => {
			autoRefresh_innerDate_div();
		}, 500);
		
		function pad(n, width) {
			n = n + '';
			return n.length >= width ? n
			:new Array(width - n.length + 1).join('0') + n;
		}

		// function autoRefresh_sample_div() {
		// 	var currentLocation = window.location;
		// 	$("#innerDate").load(currentLocation + ' #innerDate');

		// 	let now = new Date();
		// 	// document.getElementById('innerDate').innerHTML = "Hello";
		// }
		// setInterval(() => {
		// 	autoRefresh_sample_div();
		// }, 1000);
	</script>