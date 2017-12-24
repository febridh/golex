<?php
include '../../golex.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Tambahkan Situs | Golex search engine</title>
	<link href="css/general.css" rel="stylesheet">
	<link href="css/style.addSitus.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.js"></script>
	<script>
		$(document).ready(function() {
			$("#tblSubmit").click(function() {
				var url = $("#url").val();
				var site = 'url='+url;
				$.ajax({
					type: "POST",
					url: "aksi/addSitus.php",
					data: site,
					success: function() {
						$(".bg").fadeIn(300);
						$("#isiNotif").load("aksi/modul/loadNotif.php");
						$(".notif").css({"right":"20%;"});
					}
				});
				return false;
			});
			$(".bg").click(function() {
				$(".bg").fadeOut(300);
				$(".notif").css({"right":"-80%"});
			});
		});
	</script>
</head>
<body>

<div class="atas">
	<h1 class="judul">Tambahkan Situs</h1>
</div>

<div class="konten">
	<p>Masukkan URL pada box di bawah ini untuk menambahkan halaman situs Anda</p>
	<form>
		<input type="text" class="box" id="url">
		<button id="tblSubmit">Submit</button>
	</form>
</div>

<div class="bg"></div>
<div class="notif">
	<div class="wrap">
		<div id="isiNotif">Situs berhasil ditambahkan!</div>
	</div>
</div>

</body>
</html>