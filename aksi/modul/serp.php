<?php
include '../../golex.php';

error_reporting(1);
$q = $_COOKIE['katakunci'];
$bag = $_COOKIE['bag'];
foreach ($golex->serp($q) as $row) {
	if($bag == "web" or $bag == "") {
		echo '
		<div class="boxSite">
			<h2><a href="'.$row['url'].'">'.$row['judul'].'</a></h2>
			<div class="url"><a href="'.$row['url'].'">'.$row['url'].'</a></div>
			<p>'.$row['deskripsi'].'</p>
		</div>
		';
	}else if($bag == "gambar") {
		echo "<a href='".$row['url']."'>";
		echo $golex->getImage($row['url']).
			 "</a>";
	}else if($bag == "video") {
		echo "Ini akan diupdate nanti";
	}
}