<?php

namespace offneo\colorpicker;

/**
 * @author Offneo <admin@offneo.com>
 * @since 1.0
 */
class ColorPickerAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-minicolors';
    
    public $css = [
    	'jquery.minicolors.css'	
    ];
    
    public $js = [
    	'jquery.minicolors.min.js'	
    ];
    public $depends = [
    	'yii\web\JqueryAsset',
    ];
}