<?php

namespace app\controllers;

use yii\web\Controller;

class HelpController extends Controller
{
  public function actionIndex()
  {
    return $this->render('index');
  }

  public function actionAccountSettings()
  {
    return $this->render('accountSettings');
  }

  public function actionLoginAndSecurityPrivacy()
  {
    return $this->render('loginAndSecurityPrivacy');
  }

  public function actionPrivacy()
  {
    return $this->render('privacy');
  }
}