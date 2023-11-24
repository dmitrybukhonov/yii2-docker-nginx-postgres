#!/bin/bash

if [[ -f .env ]]; then
    echo "Pull master branch"
    git pull origin master

    echo "docker compose up -d"
    docker compose up -d

    echo "composer install"
    docker compose exec yii2 composer install
else
    echo "The .env file does not exist. Please create a .env file before running composer install and migration."
fi
