<?php
namespace sablesoft\vue\assets;

/**
 * Class AxiosAsset
 * @package sablesoft\vue\assets
 */
class AxiosAsset extends \yii\web\AssetBundle {

    public $sourcePath = '@bower/axios/dist';
    
    public function init() {
        parent::init();
        $this->prepareJs();
    }

    protected function prepareJs() {
        $this->js = ( \Yii::$app->vueManager->isDev )? [ 'axios.js' ] : [ 'axios.min.js' ];
    }

}
