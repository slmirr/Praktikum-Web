<?php

namespace frontend\controllers;

class KemahasiswaanController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$prodi1 = "Sistem Informasi";
    	$prodi2 = "Teknik Informatika";
    	$jurusan1 = "125 Mahasiswa";
    	$jurusan2 = "100 Mahasiswa";

        return $this->render('index',[
        'si' => $prodi1,
        'ti' => $prodi2,
        'jurusan1' => $jurusan1,
        'jurusan2' => $jurusan2

        ]);
    }

}
