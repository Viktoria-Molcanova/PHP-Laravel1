<!DOCTYPE html>
<html>
<head>
    <title>Форма пользователя</title>
</head>
<body>
<form action="/store_form" method="POST">
    @csrf
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>

    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <button type="submit">Отправить</button>
</form>
</body>
</html>
