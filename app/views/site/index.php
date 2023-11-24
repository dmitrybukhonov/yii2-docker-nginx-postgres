<?php

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Yii2 Docker PostgreSQL Nginx';

?>
<div class="container">
    <h1>Welcome, Bro</h1>
    <p>This is a simple welcome page.</p>
</div>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        animation: fadeInUp 1s ease-in-out;
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
        animation: fadeInDown 1s ease-in-out;
    }

    p {
        color: #666;
        line-height: 1.6;
        animation: fadeInUp 1s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Анимация изменения текста */
    @keyframes changeText {
        0% {
            content: "This is a just simple welcome page.";
        }

        25% {
            content: "Welcome to the fun zone!";
        }

        50% {
            content: "Let's have a blast!";
        }

        75% {
            content: "Enjoy your stay!";
        }

        100% {
            content: "Yay, it's a party!";
        }
    }

    p::after {
        content: "This is a simple welcome page.";
        animation: changeText 8s infinite linear;
        display: block;
    }
</style>