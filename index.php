<?php
include('simple_html_dom.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>World News Right Now</title>

	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
	<body>
		<div class="overlay">
		<h1>World News Right Now</h1>
		<hr />

		<?php
		// Format: array(array("string URL", "string KEYWORD/SEARCHPHRASE"), ...)
		$bases = array(array("https://www.osterbottenstidning.fi", ".listheadline, .listcategory"),
						 array("https://www.nyan.ax", ".entry-title, .entry-date"));

		for($i = 0; $i < sizeof($bases); $i++) {
			echo "<h2>From " . $bases[$i][0] .  "</h2>";

			$curl = curl_init();
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($curl, CURLOPT_URL, $bases[$i][0]);
			curl_setopt($curl, CURLOPT_REFERER, $bases[$i][0]);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
			$str = curl_exec($curl);
			curl_close($curl);

			$html_base = new simple_html_dom();
			$html_base->load($str);
			$arr = $html_base->find($bases[$i][1]);

			for($j = 0; $j < sizeof($arr); $j++) {
				echo "<div class='newsBox'>";
				echo "<h3>" . $arr[$j] . "</h3>";
				echo "</div>";

				if($j > 10)
					break;
			}
		}
		?>

		<hr />
		<footer>
			<p>Created by Johannes Sundqvist</p>
		</footer>
		</div>
	</body>
</html>
