<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка autput.ru | Добавить анонс</title>
</head>
<body>
    <form action="/admin/work/add" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="workTitle">Название анонса</label>
        <input type="text" id="workTitle" name="workTitle">

        <label for="workCompany">Слаг компании для url</label>
        <input type="text" id="workCompany" name="workCompany">

        <label for="workType">Слаг типа работы для url</label>
        <input type="text" id="workType" name="workType">

        <label for="workThumbnail">Изображение карточки</label>
        <input type="file" id="workThumbnail" name="workThumbnail">

        <label for="workSizeType">Размер карточки работы</label>
        <select id="workSizeType" name="workSizeType">
            <option value="sm">Маленькая карточка</option>
            <option value="md">Средняя карточка</option>
            <option value="xl">Большая карточка</option>
        </select>

        <label for="workTitleColor">Цвет заголовка</label>
        <select id="workTitleColor" name="workTitleColor">
            <option selected value="#000">Черный заголовок</option>
            <option value="#FFF">Белый заголовок</option>
        </select>

        <label for="colleagues">Выбор сотрудников</label>
        <select id="colleagues" name="colleague[]" multiple>
            @foreach ($colleagues as $colleague)
            <option value="{{$colleague->slug}}">{{$colleague->slug}}</option>
            @endforeach
        </select>

        <button type="submit">Сохранить анонс</button>
    </form>
</body>
</html>
