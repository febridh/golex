<?php

class golex {
	public function __construct() {
		$this->koneksi();
	}
	public function koneksi() {
		$this->konek = new mysqli("localhost","root","","golex");
		return $this->konek;
	}
	public function addSitus($a, $b, $c, $d, $e, $f) {
		$cek = mysqli_num_rows(mysqli_query($this->konek, "SELECT url FROM situs WHERE url = '$e'"));
		if($cek != 0) {
			$ubah = mysqli_query($this->konek, "UPDATE situs SET added = '$f' WHERE url = '$e'");
			setcookie('notif','Situs berhasil diupdate', time() + 34, "/");
		}else {
			$ins = mysqli_query($this->konek, "INSERT INTO situs VALUES('$a','$b','$c','$d','$e','$f')");
			setcookie('notif','Situs berhasil ditambahkan', time() + 34, "/");
		}
	}
	public function getTitle($url) {
		$fp = file_get_contents($url);
        if (!$fp) 
            return null;

        $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
        if (!$res) 
            return null; 

        // Clean up title: remove EOL's and excessive whitespace.
        $title = preg_replace('/\s+/', ' ', $title_matches[1]);
        $title = trim($title);
        return $title;
	}
	public function getMeta($url, $struktur) {
		$tags = get_meta_tags($url);
		return $tags[$struktur];
	}
	public function serp($kw) {
		if(empty($kw)) {
			exit();
		}
		$q = mysqli_query($this->konek, "SELECT * FROM situs WHERE keyword LIKE '%$kw%' OR judul LIKE '%$kw%' ORDER BY added DESC");
		if(mysqli_num_rows($q) == 0) {
			echo "<h2>Tidak ditemukan hasil untuk ".$kw."</h2>";
		}else {
			while($r = mysqli_fetch_array($q)) {
				$hasil[] = $r;
			}
			return $hasil;
		}
	}
	public function getImage($url) {
		$homepage = file_get_contents($url);

		$img = preg_match_all("{<img\\s*(.*?)src=('.*?'|\".*?\"|[^\\s]+)(.*?)\\s*/?>}ims", $homepage, $gambar, PREG_SET_ORDER);
		foreach ($gambar as $val) {
			$tr = trim($val[2], '" '."'");
			echo "<img src='".$tr."' class='serpGambar'>";
		}
	}
}

$golex = new golex();