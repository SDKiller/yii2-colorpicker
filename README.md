Yii2 Colorpicker Widget
=======================
Yii2 Colorpicker widget implements [jquery-minicolors](https://github.com/claviska/jquery-minicolors) and allows to use it easily in the project.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist zyx/yii2-colorpicker "*"
```

or add

```
"zyx/yii2-colorpicker": "*"
```

to the require section of your `composer.json` file.

Note: currently it is not hosted on Packagist, need to add explicitly to "repositories" section:

```
    {
        "name": "zyx/yii2-colorpicker",
        "type": "vcs",
        "url": "git@github.com:SDKiller/yii2-colorpicker.git"
    }
```


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

<?= $form->field($model, 'attribute')
    ->widget(\zyx\yii2-colorpicker\ColorPicker::className(), $options, $clientOptions); ?>
