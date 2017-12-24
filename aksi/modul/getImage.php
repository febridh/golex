<?php

$url = "http://localhost/slide";
$homepage = file_get_contents($url);

preg_match_all("{<img\\s*(.*?)src=('.*?'|\".*?\"|[^\\s]+)(.*?)\\s*/?>}ims", $homepage, $matches, PREG_SET_ORDER);

foreach ($matches as $val) {
	$lok = trim($val[2], '""');
	echo "<img src='".$url."/".$lok."'><br />";
}