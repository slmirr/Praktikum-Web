<?php

namespace frontend\controllers;
use frontend\models\NilaiSiswa;

class SilmiController extends \yii\web\Controller
{
    public function actionIndex()
    {
	 	$ukm1 = "Futsal";
    	$ukm2 = "Badminton";
    	$lfk1 = "DPM";
    	$lfk2 = "BEM";

        return $this->render('index',[
        'futsal' => $ukm1,
        'badminton' => $ukm2,
        'dpm' => $lfk1,
        'bem' => $lfk2

        ]);
    }

    public function actionNilai(){
        $mhs1 = new NilaiSiswa("0110117009","Farah Shofiyah");
        $mhs1->nilai=84.1;

        return $this->render('nilai',[
            'mhs1'=>$mhs1,
        ]);
    }

}
