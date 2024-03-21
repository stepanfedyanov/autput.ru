<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'default-header.php' ?>
    <title>Админка autput.ru | Добавить сотрудник</title>
</head>
<body>
    <form action="/admin/colleague/add" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="slug">Ник сотрудника</label>
        <input type="text" id="slug" name="slug">

        <label for="secondName">Отчество</label>
        <input type="text" id="secondName" name="secondName">

        <label for="firstName">Имя</label>
        <input type="text" id="firstName" name="firstName">

        <label for="lastName">Фамилия</label>
        <input type="text" id="lastName" name="lastName">

        <label for="jobTitle">Должность</label>
        <input type="text" id="jobTitle" name="jobTitle">

        <label for="socialLinkName">Название ссылки на сайт</label>
        <input type="text" id="socialLinkName" name="socialLinkName">

        <label for="socialLink">Ссылка на сайт</label>
        <input type="text" id="socialLink" name="socialLink">

        <label for="avatar">Аватар</label>
        <input type="file" id="avatar" name="avatar">

        <label for="cover">Обложка</label>
        <input type="file" id="cover" name="cover">

        <button type="submit">Сохранить сотрудника</button>
    </form>
</body>
</html>
