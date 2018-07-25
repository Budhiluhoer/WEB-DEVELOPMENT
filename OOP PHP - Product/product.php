<?php
// Penjualan komik & game

class Produk {
	public 	$judul, $penulis, $penerbit, $harga;

	public function __construct($judul,$penulis,$penerbit,$harga){
		// $this berperan sebagai pemanggil property yang diluar lingkup
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}		
	
	public function getPenulis() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		$str = "$this->judul | {$this->getPenulis()} (Rp. $this->harga)";
		return $str;
	}

} //END Class Produk

class Komik extends Produk {
	public $jmlHalaman;

	public function __construct($judul,$penulis,$penerbit,$harga,$jmlHalaman){
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk(){
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
} // END Class Komik

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul,$penulis,$penerbit,$harga,$waktuMain) {
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk(){
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	
	}
} //END Class Game

class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "$produk->judul |
				{$produk->getPenulis()}
				(Rp. $produk->harga)";
		return $str;
	}
} // END Class CetakInfoProduk


$komik1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000, 100);
$game1 = new Game("Call of Duty", "Neil", "Sony", 300000, 50);

echo $komik1->getInfoProduk();
echo '<hr width="50%" align="left" color="black">';
echo $game1->getInfoProduk();