<?php

namespace offneo\colorpicker;
use Yii;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Color picker widget
 */
class ColorPicker extends InputWidget
{
	public $name;
	
	public $value;
	
	public $options = [
		'class' => 'form-control'	
	];
	
	public $clientOptions = [
		'control' => 'wheel',
		'position' => 'bottom right',
		'theme' => 'bootstrap'	
	];
	
	public function init()
	{
		if($this->hasModel()) {
			$this->options['id'] = Html::getInputId($this->model, $this->attribute);
		} else {
			$this->options['id'] = $this->getId();
		}
		
		$this->registerAssets();
		$this->registerScript();
	}
	
    public function run()
    {
// 		echo Html::beginTag('div', ['id' => $this->options['id'].'-box', 'class' => 'input-group date']);
		if($this->hasModel()) {	
			echo Html::activeTextInput($this->model, $this->attribute, $this->options);
		} else {
			echo Html::textInput($this->name, $this->value, $this->options);
		}
// 		echo Html::tag('span', '<span class="glyphicon glyphicon-calendar"></span>', ['class' => 'input-group-addon']);
// 		echo Html::endTag('div');
    }
    
    public function registerAssets()
    {
    	ColorPickerAsset::register($this->getView());
    }
    
    public function registerScript()
    {
		$clientOptions = (count($this->clientOptions)) ? Json::encode($this->clientOptions) : '';
		$widgetId = $this->options['id'];// . '-box';
		$this->getView()->registerJs("jQuery('#{$widgetId}').minicolors({$clientOptions});", \yii\web\View::POS_READY);
    }
}
