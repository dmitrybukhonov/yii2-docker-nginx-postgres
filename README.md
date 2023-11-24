# Инструкции по развертыванию проекта

Этот проект предназначен для демонстрации возможностей деплоя приложения и доступа к нему через веб-браузер. Следуя этим инструкциям, вы сможете развернуть приложение и просматривать его в браузере.

## Предварительные требования

- Docker: Убедитесь, что Docker установлен на вашей системе. Вы можете скачать Docker [здесь](https://www.docker.com/get-started).

## Развертывание приложения

1. Склонируйте репозиторий:

   ```bash
   git clone https://github.com/dmitrybukhonov/yii2-docker-nginx-postgres.git
   ```
2. Перейдите в каталог проекта:

   ```bash
   cd yii2-docker-nginx-postgres
   ```
3. Скопируйте .env и задайте базовые параметры:

   ```bash
   cp .env-example .env
   ```
3. Запустите скрипт deploy.sh. Этот скрипт выполняет следующие действия:

- Выгружает обновления из ветки master репозитория.
- Запускает Docker Compose для развертывания контейнеров приложения.
- Устанавливает необходимые зависимости Composer.
- Запускает деплой
   ```bash
   ./bash deploy.sh
   ```
4. После успешного выполнения скрипта, ваше приложение будет доступно по адресу http://localhost:80/site/index в вашем веб-браузере.