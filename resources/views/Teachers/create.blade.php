<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <div class="nav" style="margin-bottom:15px">
            <a href="{{ route('teachers.list') }}">Powrót</a>
        </div>
        <h3>Dodaj korepetytora</h3>
        <form action="{{ route('teachers.create') }}" method="post">
            <div>
                <label for="name">Imię i nazwisko: </label>
                <input type="text" name="name" id="name" style="margin-top:10px">
            </div>
            <div>
                <label for="email_adress">Adres e-mail: </label>
                <input type="text" name="email_adress" id="email_adress" style="margin-top:10px">
            </div>
            <div>
                <label for="phone_number">Numer telefonu: </label>
                <input type="text" name="phone_number" id="phone_number" style="margin-top:10px">
            </div>
            <div>
                <label for="education">Wykształcenie: </label>
                <input type="text" name="education" id="education" style="margin-top:10px">
            </div>
            <div>
                <label for="experience">Doświadczenie: </label>
                <input type="text" name="experience" id="experience" style="margin-top:10px">
            </div>
            <div>
                <label for="subject_id">Przedmiot: </label>
                <select type="integer" name="subject_id" id="subject_id" style="margin-top:10px">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" style="margin-top:10px">Zaakceptuj</button>
            </div>
        </form>

    </div>
</body>

</html>
