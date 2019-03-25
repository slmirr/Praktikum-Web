<?php

namespace frontend\controllers;
use frontend\models\Dosen;
use frontend\models\NilaiSiswa;

class DosenController extends \yii\web\Controller
{
    
public function actionDataDosen()
{
	$dsn1 = new Dosen("011011","Amalia Rahmah");
        $dsn1->idprodi=1;

       return $this->render('data-dosen',[
             'dsn'=>$dsn1,
         ]);
     }

 }

