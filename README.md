## Работа с webhooks.
Webhook принимается в файле routes/web.php .

Далее он обрабатывается в контроллере: app/Http/Controller/UserController .

Запись в бд написана в самом контроллере и происходит с помощью модели: app/Models/get8

## Вывод и изменение записей о users. 
Вывод записей происходит с помощью UserController.php метода showUser(). 

Записи выводятся на resources/views/users.blade.php . 

Данный views так же может изменять данные о пользователях с помощью ajax запроса на routes/web.php '/changeUser'. Который в последствие передает данные на тот же метод ,что и webhook.

## Данные из MongoDB.

Данные из MongoDB лежат в db/get8.json 

Настроить подключение к MongoDB можно с помощью .env файла.



