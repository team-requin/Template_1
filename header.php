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
		function autoRefresh_sample_div() {
			var currentLocation = window.location;
			$("#header").load(currentLocation + ' #header');

			let now = new Date();



			// document.getElementById('innerDate').innerHTML = "Hello";
		}
		setInterval(() => {
			autoRefresh_sample_div();
		}, 1000);
	</script>