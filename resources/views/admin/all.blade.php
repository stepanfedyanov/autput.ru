<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка autput.ru | Вывод всех</title>
</head>
<body>
    <h1>Вывод всех данных типа {{ $title }}</h1>
    <ul>
        @foreach ($data as $elem)
            <li>{{ $elem }}</li>
        @endforeach
    </ul>
</body>
</html>
