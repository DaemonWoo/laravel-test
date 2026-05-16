# Laravel + Alpine.js Bookstore

Онлайн-магазин книг с панелью администратора.

## Скриншоты
#### Страница с книгами
![изображение](https://github.com/user-attachments/assets/94e39111-07be-4d07-8286-7bcc2ff09465 )
#### Страница книги с комментариями
![изображение](https://github.com/user-attachments/assets/ed2b0710-e55d-4b76-8b0b-559a374824e2 )
#### При создании сотруднка email приходит на почту
![изображение](https://github.com/allin17/laravel-rest/assets/53586791/f39ee150-b94d-4f60-90e0-7f78503100fa )
<!-- #### Страница CRUD сотрудников
![изображение](https://github.com/allin17/laravel-test/assets/53586791/6703f7bd-8b69-4e18-9dd8-4cccbc41aa5b ) -->
#### Вид сотрудника магазина
![изображение](https://github.com/user-attachments/assets/b4ad7c13-6e8a-461d-8747-5edc9d9b17b2 )

## Установка и запуск

```bash
# 1. Клонировать репозиторий
git clone <url>
cd <папка>

# 2. Установить PHP-зависимости
composer install

# 3. Скопировать окружение
cp .env.example .env

# 4. Сгенерировать ключ приложения
php artisan key:generate

# 5. Запустить контейнеры
docker-compose up -d

# 6. Выполнить миграции и сидеры
docker-compose exec app php artisan migrate --seed

# 7. Установить JS-зависимости
npm install

# 8. Запустить фронт
npm run dev

 

## Учётные записи (после migrate --seed)

| Роль          | Email                  | Пароль   |
| ------------- | ---------------------- | -------- |
| Администратор | <admin@domain.com>     | 123456   |
