<?php

namespace app;

use yii\base\Controller;

/**
 * Class SiteController
 * @package app
 */
class SiteController extends Controller
{

    public function actionIndex()
    {
        phpinfo();
    }
}
