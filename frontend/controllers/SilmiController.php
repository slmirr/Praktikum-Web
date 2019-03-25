<?php

namespace frontend\controllers;

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

}
