<?php
/**
 * @author      Serge Postrash aka SDKiller <jexy.ru@gmail.com>
 * @link        https://github.com/SDKiller/yii2-colorpicker
 * @copyright   Copyright (c) 2017 Serge Postrash
 * @license     BSD 3-Clause, see LICENSE.md
 */

namespace zyx\colorpicker;

/**
 * Class ColorPickerAsset
 * @package zyx\colorpicker
 *
 * @link https://github.com/claviska/jquery-minicolors
 * @link https://labs.abeautifulsite.net/jquery-minicolors/
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
