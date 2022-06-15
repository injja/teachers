<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>Wiadomość do {{ $name }} wysłana!</h3>
    </div>
    <div><a href="{{ route('teachers.list') }}">Powrót do listy</a></div>
</body>

</html>
