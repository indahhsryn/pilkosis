<?php
foreach ($hslsuara as $hsl) {
	$data[] = ['label' => $hsl->nama, 'y' => $hsl->jml_suara];
	
}
?>
<script type="text/javascript">
	window.onload = function() {

		var chart = new CanvasJS.Chart("chartContainer", {
			theme: "light1", // "light2", "dark1", "dark2"
			animationEnabled: false, // change to true		
			title: {
				text: "Vote Result"
			},
			data: [{
				// Change type to "bar", "area", "spline", "pie",etc.
				type: "column",
				dataPoints: <?= json_encode($data, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();

	}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>