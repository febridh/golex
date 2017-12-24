<?php
include '../golex.php';

$id = rand(1,9999999999);
$url = $_POST['url'];
$judul = $golex->getTitle($url);
$keyword = $golex->getMeta($url, "keyword");
if($keyword == "") {
	$keyword = $golex->getMeta($url, "keywords");
}
$deskripsi = $golex->getMeta($url, "description");
if(empty($deskripsi)) {
	$deskripsi = $keyword;
}
$added = time();

$golex->addSitus($id, $judul, $deskripsi, $keyword, $url, $added);