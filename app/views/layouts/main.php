<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var string $content
 */

$this->registerCsrfMetaTags();

?>

<!DOCTYPE html>
<html lang="ru-RU">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= Html::encode($this->title) ?></title>
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="container">
            <main class="main">
                <?= $content ?>
            </main>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>