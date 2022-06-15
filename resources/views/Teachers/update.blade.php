<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="nav" style="margin-bottom:15px">
            <a href="{{ route('teachers.list') }}">Powrót</a>
        </div>
        <form action="{{ route('teachers.update', ['id' => $teacher->id]) }}" method="post">
            <h3>Edycja korepetytora</h3>
            <div>
                <label for="name">Imię i nazwisko: </label>
                <input type="text" name="name" id="name" value="{{ $teacher->name }}" style="margin-top:10px">
            </div>
            <div>
                <label for=" email_adress">Adres e-mail: </label>
                <input type="text" name="email_adress" id="email_adress" value="{{ $teacher->email_adress }}"
                    style="margin-top:10px">
            </div>
            <div>
                <label for="phone_number">Numer telefonu: </label>
                <input type="text" name="phone_number" id="phone_number" value="{{ $teacher->phone_number }}"
                    style="margin-top:10px">
            </div>
            <div>
                <label for="education">Wykształcenie: </label>
                <input type="text" name="education" id="education" value="{{ $teacher->education }}"
                    style="margin-top:10px">
            </div>
            <div>
                <label for="experience">Doświadczenie: </label>
                <input type="text" name="experience" id="experience" value="{{ $teacher->experience }}"
                    style="margin-top:10px">
            </div>
            <div>
                <label for="subject_id">Przedmiot: </label>
                <select type="integer" name="subject_id" id="subject_id" value="{{ $teacher->subject_id }}"
                    style="margin-top:10px">
                    @foreach ($subjects as $subject)
                        @if ($teacher->subject_id == $subject->id)
                            <option value="{{ $subject->id }}" selected>{{ $subject->name }}</option>
                        @else
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endif
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
