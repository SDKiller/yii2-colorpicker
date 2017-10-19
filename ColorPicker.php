<?php
/**
 * @author      Serge Postrash aka SDKiller <jexy.ru@gmail.com>
 * @link        https://github.com/SDKiller/yii2-colorpicker
 * @copyright   Copyright (c) 2017 Serge Postrash
 * @license     BSD 3-Clause, see LICENSE.md
 */

namespace zyx\colorpicker;

use yii\web\JsExpression;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class ColorPicker
 * @package zyx\colorpicker
 *
 * @link https://github.com/claviska/jquery-minicolors
 * @link https://labs.abeautifulsite.net/jquery-minicolors/
 */
class ColorPicker extends InputWidget
{
    /**
     * @var array
     */
    public $options = [
        'class' => 'form-control',
    ];
    /**
     * @var array
     */
    public $clientOptions = [
        'control'  => 'wheel',
        'position' => 'bottom left',
        'theme'    => 'bootstrap',
    ];
    /**
     * @var bool
     */
    public $initJs = true;


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if ($this->initJs === true) {
            $this->registerAssets();
            $this->registerScript();
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
    }

    /**
     * Register https://github.com/claviska/jquery-minicolors asset
     */
    public function registerAssets()
    {
        ColorPickerAsset::register($this->getView());
    }

    /**
     * Init client script
     */
    public function registerScript()
    {
        $clientOptions = empty($this->clientOptions) ? '' : new JsExpression(Json::encode($this->clientOptions));
        $this->getView()->registerJs('jQuery("#{' . $this->options['id'] . '}").minicolors(' . $clientOptions . ');', \yii\web\View::POS_READY);
    }
}
