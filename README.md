Yii2 Colorpicker Widget
=======================
Yii2 Colorpicker widget implements jquery-minicolors and allows to use it easily in the project.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist offneo/yii2-colorpicker "*"
```

or add

```
"offneo/yii2-colorpicker": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= $form->field($model, 'attribute')->widget(\offneo\yii2-colorpicker\ColorPicker::className(), $options, $clientOptions); ?>