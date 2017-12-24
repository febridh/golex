<?php

$q = $_GET['katakunci'];
$kuki = $_COOKIE['katakunci'];
if(empty($kuki)) {
	setcookie('katakunci',$q,time() + 3600, "/");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1"
	<meta name="author" content="Riyan Satria">
	<meta name="description" content="Search engine yang biasa-biasa saja">
	<title><?php echo $q; ?> | Golex search engine</title>
	<link href="css/general.css" rel="stylesheet">
	<link href="css/style.cari.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.js"></script>
	<script>
		$(document).ready(function() {
			$(".konten").load("aksi/modul/serp.php");
		});
		function cari() {
			$(document).ready(function() {
				var q = $("#katakunci").val();
				var kuki = 'namakuki=katakunci&value='+q+'&durasi=3600';
				$.ajax({
					type: "POST",
					url: "aksi/setCookie.php",
					data: kuki,
					success: function() {
						$(".konten").load("aksi/modul/serp.php");
					}
				});
			});
		}
	</script>
</head>
<body>

<div class="atas">
	<div class="judul">Golex</div>
	<div class="formCari">
		<form action="cari.php">
			<input type="text" class="boxCari" name="katakunci" id="katakunci" oninput="cari()" value="<?php echo $kuki; ?>">
			<button id="tblCari"><i class="fa fa-search"></i> Cari</button>
		</form>
	</div>
</div>

<?php
error_reporting(1);
$bag = $_GET['bag'];
setcookie('bag',$bag,time() + 3600, "/");
?>

<div class="kategori">
	<a href="?katakunci=<?php echo $kuki; ?>&bag=web"><li <?php if($bag == "" or $bag == "web") { echo "id='active'"; } ?>>Web</li></a>
	<a href="?katakunci=<?php echo $kuki; ?>&bag=gambar"><li <?php if($bag == "gambar") { echo "id='active'"; } ?>>Gambar</li></a>
	<a href="?katakunci=<?php echo $kuki; ?>&bag=video"><li <?php if($bag == "video") { echo "id='active'"; } ?>>Video</li></a>
</div>

<div class="konten">
	<!--
	<div class="boxSite">
		<h2><a href="#">Belajar Ngeweb ID</a></h2>
		<div class="url"><a href="#">http://www.belajarnge.web.id</a></div>
		<p>All About Ngeweb Berbahasa ID</p>
	</div>
	-->
</div>

</body>
</html>