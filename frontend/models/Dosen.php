<?php
namespace frontend\models;

class Dosen{
	public $nidn;
	public $nama;
	public $idprodi;

    public function __construct($nidn, $nama){
    	$this->nidn = $nidn;
    	$this->nama = $nama;
    }

	public function idprodi(){
		if($this->idprodi == 1) {
			return "Sistem Informasi";
		}
		else if($this->idprodi == 2) {
			return "Teknik Informatika";
		} else {
			return "Maaf ID Prodi Salah";
		}
	}
}
?>